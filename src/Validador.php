<?php

class Validador {
    public function validarNumeroPositivo($numero){
        if ($numero<0){
            throw new NegativoException("El numero es negativo");
        }
    }
}