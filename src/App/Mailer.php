<?php
namespace App;

class Mailer {

    public function enviarMensaje($email, $mensaje){
        if(empty($email)){
            return false;
        }

        sleep(10);
        echo "send '$mensaje' to '$email'";
        return true;
    }
}