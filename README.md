Tabela FIPE
===========

Biblioteca em PHP para pesquisar dados da tabela FIPE.

Este pacote foi desenvolvido em base desse link: https://deividfortuna.github.io/fipe/

## Como usar

A consulta pode ser realizada por 3 tipos de veículos:

1. Carros
2. Motos
3. Caminhões

Exemplo de como consultar dados de um carro:

```php
<?php

use Aristides\TabelaFIPE\Cars;

$cars = new Cars;
// Lista todas as marcas
// echo $cars->getBrands();

// Lista todos os modelos de código 22 (Marca Ford)
// echo $cars->getModels(22);

// Lista todos os anos do modelo 4135 (Modelo Fiesta)
// echo $cars->getYears(22, 4135);

// Lista todos as informações e valores do Ford Fiesta do ano de 2011
echo $cars->getPrice(22, 4135, '2011-1');

// Resultado
{
     "Valor": "R$ 19.676,00",
     "Marca": "Ford",
     "Modelo": "Fiesta 1.0 8V Flex/Class 1.0 8V Flex 5p",
     "AnoModelo": 2011,
     "Combustivel": "Gasolina",
     "CodigoFipe": "003310-3",
     "MesReferencia": "março de 2020 ",
     "TipoVeiculo": 1,
     "SiglaCombustivel": "G"
}

```

## Métodos disponíveis

`getBrands()` Retorna todas as marcas

`getModels(int $codBrand)` Retorna todos os modelos

`getYears(int $codBrand, int $codModel)` Retorna todos os anos

`getPrice(int $codBrand, int $codModel, string $year)` Retorna os dados do veículo

## Testes

Para executar os testes:

`composer run test`
