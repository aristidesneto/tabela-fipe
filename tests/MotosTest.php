<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Veiculo\Motos;

class MotosTest extends TestCase
{
    public function testMotos()
    {
        $motos = new Motos;
        $tabela = new TabelaFipe($motos);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(77);
        $ano = $tabela->anos(77, 8161);
        $preco = $tabela->preco(77, 8161, '2018-1');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
