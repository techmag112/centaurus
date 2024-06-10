<?php

namespace Tm\Centaurus\Core;
use \Tm\Centaurus\Core\Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class SendMail {

    private $mail;

    function __construct() {
        $this->mail = new PHPMailer(true);
    }

    private function createMailBody(formDTO $response)
    {
        $html = 
        '<!doctype html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Email</title>
        </head>
            <body>
                <h1>Вам поступил новый запрос по Центравру</h1>
                <p>От ' . $response->name . '</p>
                <p>Телефон ' . $response->phone . '</p>
                <p>УEmail ' . $response->email . '</p>
                <p>Запрос: ' . $response->question . '</p>
            </body>
        </html>';
        
        return $html;
    }

    public function run(formDTO $response)
    {
        try {
            $this->mail->SMTPDebug = 1;
            $this->mail->isSMTP();
            $this->mail->Host = Config::get('mail.host');;
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $this->mail->SMTPAuth   = true;
            $this->mail->Username   = Config::get('mail.username');
            $this->mail->Password   = Config::get('mail.token');
         //   $this->mail->SMTPSecure = Config::get('mail.encryption');
            $this->mail->Port = Config::get('mail.port');
            $this->mail->setFrom(Config::get('mail.from'),"Site Admin");
            $this->mail->addAddress(Config::get('mail.toSender1'),"");//Кому отправляем
            // $this->mail->addReplyTo(Config::get('mail.toSender2'),"");
            $this->mail->isHTML(true);//HTML формат
            $this->mail->Subject = "Новый запрос по Центавру";
            $this->mail->Body    = $this->createMailBody($response);
          
            $this->mail->send();
            $result = "Сообщение отправлено";
        } catch (Exception $e) {
            $result = "Ошибка отправки: {$this->mail->ErrorInfo}";
        }

        return $result;
    }   

}