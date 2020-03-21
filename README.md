Tabela FIPE
===========

Biblioteca em PHP para pesquisar dados da tabela FIPE.

Este pacote foi desenvolvido em base desse link: https://deividfortuna.github.io/fipe/

## Como usar

A consulta pode ser realizada por 3 tipos de veículos:

1. Carros
2. Motos
3. Caminhões

### Exemplo de como consultar dados de um carro:

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

### Exemplo para consultar dados de uma moto

```php
<?php

use Aristides\TabelaFIPE\Motorcycle;

require __DIR__ . '/../vendor/autoload.php';

$motorcycle = new Motorcycle;
// echo $motorcycle->getBrands();
// echo $motorcycle->getModels(77);
// echo $motorcycle->getYears(77, 8161);
echo $motorcycle->getPrice(77, 8161, '2018-1');

// Response
{
    "Valor": "R$ 70.063,00",
    "Marca": "HARLEY-DAVIDSON",
    "Modelo": "ROAD KING SPECIAL FLHRXS",
    "AnoModelo": 2018,
    "Combustivel": "Gasolina",
    "CodigoFipe": "810085-3",
    "MesReferencia": "março de 2020 ",
    "TipoVeiculo": 2,
    "SiglaCombustivel": "G"
}
```

### Exemplo para consultar dados de um caminhão

```php
<?php

use Aristides\TabelaFIPE\Trucks;

require __DIR__ . '/../vendor/autoload.php';

$truck = new Trucks;
// echo $truck->getBrands();
// echo $truck->getModels(109);
// echo $truck->getYears(109, 4052);
echo $truck->getPrice(109, 4052, '2012-3');

// Response
{
    "Valor": "R$ 244.856,00",
    "Marca": "MERCEDES-BENZ",
    "Modelo": "Axor 4144 K 6x4 2p (diesel)",
    "AnoModelo": 2012,
    "Combustivel": "Diesel",
    "CodigoFipe": "509255-8",
    "MesReferencia": "março de 2020 ",
    "TipoVeiculo": 3,
    "SiglaCombustivel": "D"
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
