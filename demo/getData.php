<?php

use Aristides\TabelaFIPE\TabelaFipe;

require __DIR__ . '/../vendor/autoload.php';

$params = filter_input_array(INPUT_POST);

$veiculo = "Aristides\\TabelaFIPE\\Veiculo\\" . ucfirst($params['veiculo']);

$veiculo = new $veiculo();
$tabela = new TabelaFipe($veiculo);

// Tipo de busca
switch ($params['search']) {
    case 'modelo':
        $result = $tabela->modelos($params['marca']);
        break;

    case 'ano':
        $result = $tabela->anos($params['marca'], $params['modelo']);
        break;

    case 'preco':
        $result = $tabela->preco($params['marca'], $params['modelo'], $params['ano']);
        break;

    default:
        $result = $tabela->marcas();
        break;
}

echo $result;
