<?php

namespace Tm\Centaurus\App;

use \Tm\Centaurus\Core\Router;

// Start a Session
//if( !session_id() ) {
//    session_start();
//}
//$_SESSION['page'] = 1;

$GLOBALS['config']  =   [
    'mail' => [
        'host' => 'smtp.gmail.com',
        'port' => 465,
        'username' => 'oleg.khayrullin@gmail.com',
        'token' => 'nlhqggfmmgytokyq',
        'encryption' => 'tls',
        'from' => "oleg.khayrullin@gmail.com",
        'toSender1' => 'o.khayrullin@yandex.ru',
       // 'toSender2' => ''
    ]
];

Router::run();
