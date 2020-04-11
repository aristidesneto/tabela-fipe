<?php

namespace Aristides\TabelaFIPE\Vehicle;

use Aristides\TabelaFIPE\Vehicle\Contracts\IVehicle;
use Aristides\TabelaFIPE\Vehicle\Traits\TraitVehicle;

/**
 * Para pesquisas do tipo Carros
 */
class Cars implements IVehicle
{
    use TraitVehicle;

    protected $vehicle = 'carros';
}
