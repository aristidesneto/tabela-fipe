<?php

namespace Aristides\TabelaFIPE;

use Aristides\TabelaFIPE\Vehicle\Vehicle;

/**
 * Para pesquisas do tipo Carros
 */
class Cars extends Vehicle
{
    protected $vehicle = 'carros';

    public function getType()
    {
        return $this->vehicle;
    }
}
