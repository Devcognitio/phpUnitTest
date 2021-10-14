<?php
namespace App;

class User {
    
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $mailer;

    public function __construct($nombre, $apellido, $email, Mailer $mailer){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->mailer = $mailer;
    }

    public function notificarUsuario() {
        return $this->mailer->enviarMensaje($this->email, "Hola $this->nombre $this->apellido");
    }

    public function notificarUsuarioNoTesteable() {
        $mailer = new Mailer();

        return $mailer->enviarMensaje($this->email, "Hola $this->nombre $this->apellido");
    }
}