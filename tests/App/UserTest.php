<?php
namespace App;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testDebeNotificarUnUsuarioSiMailerFuncionaOK(){
        $mailerMock = $this->createMock(Mailer::class);

        $mailerMock->method("enviarMensaje")
                ->willReturn(true);

        $user = new User("carlos", "acevedo", "test@devco.com", $mailerMock);

        $resp = $user->notificarUsuario();

        $this->assertTrue($resp);
    }

    public function testDebeFallarNotificacionSiMailerNOFuncionaOK(){
        $mailerMock = $this->createMock(Mailer::class);

        $mailerMock->method("enviarMensaje")
                ->willReturn(false);

        $user = new User("carlos", "acevedo", "test@devco.com", $mailerMock);

        $resp = $user->notificarUsuario();

        $this->assertFalse($resp);
    }
}