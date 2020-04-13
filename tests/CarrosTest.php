<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Veiculo\Carros;

class CarrosTest extends TestCase
{
    public function testCarros()
    {
        $carros = new Carros;
        $tabela = new TabelaFipe($carros);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(22);
        $ano = $tabela->anos(22, 4135);
        $preco = $tabela->preco(22, 4135, '2011-1');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
