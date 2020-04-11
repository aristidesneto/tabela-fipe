<?php

namespace Aristides\TabelaFIPE\Vehicle;

use Aristides\TabelaFIPE\Vehicle\Contracts\IVehicle;
use Aristides\TabelaFIPE\Vehicle\Traits\TraitVehicle;

/**
 * Para pesquisas do tipo Caminhões
 */
class Trucks implements IVehicle
{
    use TraitVehicle;

    protected $vehicle = 'caminhoes';
}
