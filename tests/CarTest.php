<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Vehicle\Cars;

class CarTest extends TestCase
{
    public function testCar()
    {
        $cars = new Cars;
        $tabela = new TabelaFipe($cars);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(22);
        $ano = $tabela->ano(22, 4135);
        $preco = $tabela->preco(22, 4135, '2011-1');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
