<?php

use PHPUnit\Framework\TestCase;
use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Veiculo\Caminhoes;

class CaminhoesTest extends TestCase
{
    public function testCaminhoes()
    {
        $caminhoes = new Caminhoes;
        $tabela = new TabelaFipe($caminhoes);

        $marcas = $tabela->marcas();
        $modelos = $tabela->modelos(109);
        $ano = $tabela->anos(109, 4052);
        $preco = $tabela->preco(109, 4052, '2012-3');

        $this->assertNotNull($marcas);
        $this->assertNotNull($modelos);
        $this->assertNotNull($ano);
        $this->assertNotNull($preco);
    }
}
