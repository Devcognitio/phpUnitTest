<?php
namespace App;

class Formateador {

    public function formatear($texto){
        $formateado = $texto;

        $formateado = preg_replace("/[^a-zA-Z\s]/", "", $formateado);

        $formateado = preg_replace("/\s+/", "_", $formateado);

        $formateado =  strtolower($formateado);

        $formateado = trim($formateado);

        return $formateado;
    }
}