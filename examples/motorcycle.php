<?php

use Aristides\TabelaFIPE\Motorcycle;

require __DIR__ . '/../vendor/autoload.php';

$motorcycle = new Motorcycle;
// echo $motorcycle->getBrands();
// echo $motorcycle->getModels(77);
// echo $motorcycle->getYears(77, 8161);
echo $motorcycle->getPrice(77, 8161, '2018-1');

//  Response
// {
//     "Valor": "R$ 70.063,00",
//     "Marca": "HARLEY-DAVIDSON",
//     "Modelo": "ROAD KING SPECIAL FLHRXS",
//     "AnoModelo": 2018,
//     "Combustivel": "Gasolina",
//     "CodigoFipe": "810085-3",
//     "MesReferencia": "março de 2020 ",
//     "TipoVeiculo": 2,
//     "SiglaCombustivel": "G"
// }
