<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Vehicle\Trucks;

class TruckTest extends TestCase
{
    public function testTruck()
    {
        $trucks = new Trucks;
        $tabela = new TabelaFipe($trucks);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(109);
        $ano = $tabela->ano(109, 4052);
        $preco = $tabela->preco(109, 4052, '2012-3');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
