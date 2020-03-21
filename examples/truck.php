<?php

use Aristides\TabelaFIPE\Trucks;

require __DIR__ . '/../vendor/autoload.php';

$truck = new Trucks;
// echo $truck->getBrands();
// echo $truck->getModels(109);
// echo $truck->getYears(109, 4052);
echo $truck->getPrice(109, 4052, '2012-3');

// Response
// {
//     "Valor": "R$ 244.856,00",
//     "Marca": "MERCEDES-BENZ",
//     "Modelo": "Axor 4144 K 6x4 2p (diesel)",
//     "AnoModelo": 2012,
//     "Combustivel": "Diesel",
//     "CodigoFipe": "509255-8",
//     "MesReferencia": "março de 2020 ",
//     "TipoVeiculo": 3,
//     "SiglaCombustivel": "D"
// }
