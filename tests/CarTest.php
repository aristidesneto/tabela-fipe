<?php

use Aristides\TabelaFIPE\Cars;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testCar()
    {
        $cars = new Cars;
        $brands = $cars->getBrands();
        $models = $cars->getModels(22);
        $years = $cars->getYears(22, 4135);
        $price = $cars->getPrice(22, 4135, '2011-1');

        $this->assertNotNull($brands);
        $this->assertNotNull($models);
        $this->assertNotNull($years);
        $this->assertNotNull($price);
    }
}
