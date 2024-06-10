<?php

namespace Tm\Centaurus\Controllers;

use Delight\Auth\Auth;
use League\Plates\Engine;
use \Tm\Centaurus\Core\Redirect;
use \Tm\Centaurus\Core\SendMail;
use \Tm\Centaurus\Core\FormDTO;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/**
* Класс контроллера авторизации пользователя
*/
class MainController {

    private $templates, $log, $mail;

    function __construct(Engine $templates, Logger $log) {
        $this->templates = $templates;
        $this->log = $log;
        $this->mail = new SendMail();
    }

  
    public function main_view(): void 
    {

        echo $this->templates->render('main');   
            
    }

    public function doc_view(): void 
    {
        echo $this->templates->render('doc');
       
    }

  
    public function send_request(): void 
    {

        $response = FormDTO::fromPOST();

        $sendMailReport = $this->mail->run($response);

        $this->log->info($response->name . ' ' . $response->phone . ' ' . $response->email . ' ' . $response->question . ' ' . $sendMailReport . PHP_EOL);
  
    }
  

}