<?php

use Aristides\TabelaFIPE\TabelaFipe;

require __DIR__ . '/../vendor/autoload.php';

$params = filter_input_array(INPUT_POST);

$vehicle = "Aristides\\TabelaFIPE\\Veiculo\\" . ucfirst($params['veiculo']);

$class = new $vehicle();
$tabela = new TabelaFipe($class);

// Tipo de busca
switch ($params['search']) {
    case 'modelo':
        $result = $tabela->modelos($params['marca']);
        break;

    case 'ano':
        $result = $tabela->ano($params['marca'], $params['modelo']);
        break;

    case 'preco':
        $result = $tabela->preco($params['marca'], $params['modelo'], $params['ano']);
        break;

    default:
        $result = $tabela->marcas();
        break;
}

echo $result;
