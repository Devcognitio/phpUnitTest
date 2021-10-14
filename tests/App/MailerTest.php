<?php
namespace App;

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase {

    /*public function testSinUsarTestDoubles(){
        $mailer = new Mailer();

        $resp = $mailer->enviarMensaje("test@devco.com", "Hola Test");

        $this->assertTrue($resp);
    }*/

    public function testConStub(){
        $mailerMock = $this->createMock(Mailer::class);

        $mailerMock->method("enviarMensaje")
                ->willReturn(true);

        $resp = $mailerMock->enviarMensaje("test@devco.com", "Hola Test");

        $this->assertTrue($resp);
    }

    public function testConMock(){
        $mailerMock = $this->createMock(Mailer::class);

        $mailerMock->expects($this->once())
                    ->method("enviarMensaje")
                    ->with($this->equalTo("test@devco.com"), $this->equalTo("Hola Test"));

        $resp = $mailerMock->enviarMensaje("test@devco.com", "Hola Test");

        $this->assertNull($resp);
    }
}