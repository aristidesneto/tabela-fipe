<?php

use Aristides\TabelaFIPE\Cars;
use Aristides\TabelaFIPE\Motorcycle;
use Aristides\TabelaFIPE\Trucks;
use PHPUnit\Framework\TestCase;

class TypeVehicleTest extends TestCase
{
    public function testTypes()
    {
        $car = new Cars;
        $motorcycle = new Motorcycle;
        $truck = new Trucks;

        $this->assertEquals('carros', $car->getType());
        $this->assertEquals('motos', $motorcycle->getType());
        $this->assertEquals('caminhoes', $truck->getType());
    }
}
