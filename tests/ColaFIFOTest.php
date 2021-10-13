<?php
use PHPUnit\Framework\TestCase;

class ColaFIFOTest extends TestCase {
    
    public function testDebeRetornarElPrimerElementoIngresado(){
        $cola = new ColaFIFO;
        $cola->push("uno");
        $cola->push("dos");

        $elemento = $cola->pull();

        $this->assertEquals("dos", $elemento);
    }

    public function testIniciaLaColaVacia(){
        $cola = new ColaFIFO;

        $items = $cola->count();

        $this->assertEquals(0, $items);
    }

    public function testAlRerirarUnElementoDisminuyeElCount(){
        $cola = new ColaFIFO;
        $cola->push("uno");
        $cola->push("dos");
        $cola->push("tres");
        $items = $cola->count();
        $this->assertEquals(3, $items);

        $cola->pull();
        $items = $cola->count();

        $this->assertEquals(2, $items);
    }
}