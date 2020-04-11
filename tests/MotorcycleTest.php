<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Vehicle\Motorcycle;

class MotorcycleTest extends TestCase
{
    public function testMotorcycle()
    {
        $motorcycle = new Motorcycle;
        $tabela = new TabelaFipe($motorcycle);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(77);
        $ano = $tabela->ano(77, 8161);
        $preco = $tabela->preco(77, 8161, '2018-1');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
