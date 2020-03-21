<?php

use Aristides\TabelaFIPE\Cars;

require __DIR__ . '/../vendor/autoload.php';

$cars = new Cars;
// echo $cars->getBrands();
// echo $cars->getModels(22);
// echo $cars->getYears(22, 4135);
echo $cars->getPrice(22, 4135, '2011-1');

// Response
// {
//     "Valor": "R$ 19.676,00",
//     "Marca": "Ford",
//     "Modelo": "Fiesta 1.0 8V Flex/Class 1.0 8V Flex 5p",
//     "AnoModelo": 2011,
//     "Combustivel": "Gasolina",
//     "CodigoFipe": "003310-3",
//     "MesReferencia": "março de 2020 ",
//     "TipoVeiculo": 1,
//     "SiglaCombustivel": "G"
// }
