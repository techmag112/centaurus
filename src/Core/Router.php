<?php

namespace Tm\Centaurus\Core;

use FastRoute;
use DI\ContainerBuilder;
use League\Plates\Engine;
use \Tm\Centaurus\Controllers\MainController;
use \Tm\Centaurus\Core\Redirect;
use \Tm\Centaurus\Core\Api;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * Класс роутера-маршрутизатора
 */
class Router {

    /**
    * @static run() создает контейнер DI (внедрения зависимостей) и запускает роутер
    */
    public static function run() {

         /** Сбор всех зависимостей в контейнер */
         /** Объявляем контейнер */
         $builder = new ContainerBuilder();
        /** Собираем к него зависимости - создаем экземпляр каждого класса зависимости со всеми настройками */
         $builder->addDefinitions([
             Engine::class => function() { 
                 return new Engine('../src/Templates');
             },
             Logger::class => function() { 
                    return (new Logger('newmail'))->
                    pushHandler(new StreamHandler('../src/logs/newmail.log', Level::Info));
             },     
        ]); 
        /** Создаем экземпляр контейнера */
        $container = $builder->build();
      
        $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
             $r->addRoute('GET', '/doc', ['\Tm\Centaurus\Controllers\MainController', 'doc_view']);
             $r->addRoute('GET', '/404', ['\Tm\Centaurus\Controllers\ErrorController', 'run']);
             $r->addRoute('GET', '/', ['\Tm\Centaurus\Controllers\MainController', 'main_view']);
             $r->addRoute('POST', '/', ['\Tm\Centaurus\Controllers\MainController', 'send_request']);
        
        });

        // Fetch method and URI from somewhere
         $httpMethod = $_SERVER['REQUEST_METHOD'];
         $uri = $_SERVER['REQUEST_URI'];
        
        // Strip query string (?foo=bar) and decode URI
         if (false !== $pos = strpos($uri, '?')) {
             $uri = substr($uri, 0, $pos);
         }
         $uri = rawurldecode($uri);

         $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        
         switch ($routeInfo[0]) {
             case FastRoute\Dispatcher::NOT_FOUND:
                 Redirect::to('404');
                 //echo '404 Not Found';
                 break;
             case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                 $allowedMethods = $routeInfo[1];
                 echo '405 Method Not Allowed';
                 break;
             case FastRoute\Dispatcher::FOUND:
                 $handler = $routeInfo[1];
                 $vars = $routeInfo[2];
                 
                 $container->call($handler, [$vars]);
                 break;
        }    
    }
}