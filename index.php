<?php

use Aristides\TabelaFIPE\TabelaFipe;
use Aristides\TabelaFIPE\Veiculo\Caminhoes;
use Aristides\TabelaFIPE\Veiculo\Carros;
use Aristides\TabelaFIPE\Veiculo\Motos;

require __DIR__ . '/vendor/autoload.php';

$carros = new Caminhoes;
$tabela = new TabelaFipe($carros);
echo $tabela->marcas();
