<?php

use PHPUnit\Framework\TestCase;

class ValidadorTest extends TestCase {
    public function testException(){
        $validador = new Validador();

        $this->expectException(NegativoException::class);
        $this->expectExceptionMessage("El numero es negativo");

        $validador->validarNumeroPositivo(-2);
    }
}