<?php
namespace App;

use PHPUnit\Framework\TestCase;

class FormateadorTest extends TestCase {

    /**
     * @dataProvider formateadorTestProvider
     */
    public function testFormateador($texto, $textoEsperado) {
        $formateador = new Formateador;

        $formateado = $formateador->formatear($texto);

        $this->assertSame($textoEsperado, $formateado);
    }

    public function formateadorTestProvider () {
        return [
            "debe reemplazar espacios por '_'" => ["texto de   prueba", "texto_de_prueba"],
            "debe eliminar caracteres diferentes a letras" => ["texto123 de #prueba!!", "texto_de_prueba"],
            "debe cambiar mayusculas por minusculas" => ["TExTo de PRUEBA", "texto_de_prueba"],
            "debe eliminar los saltos de linea" => ["texto \n\n\n de \n prueba", "texto_de_prueba"]
        ];
    }
}