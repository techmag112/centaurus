<?php

namespace Tm\Centaurus\Core;

class FormDTO {

    public readonly string $name;
    public readonly string $phone;
    public readonly string $email;
    public readonly string $question;

    public static function fromPOST()
    {

        $_POST = json_decode( file_get_contents("php://input"), true );

        $dto = new self();
        $dto->name = $_POST['name'];
        $dto->email = $_POST['email'];
        $dto->phone = $_POST['phone'];
        $dto->question = $_POST['question'];
        return $dto;

        /*  return array_intersect_key(
            $_POST, array_flip([
                'name',
                'phone',
                'email',
                'question',
            ])
        ); */
        
    } 

}