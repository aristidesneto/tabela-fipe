<?php

namespace Aristides\TabelaFIPE;

use Aristides\TabelaFIPE\Vehicle\Vehicle;

/**
 * Para pesquisas do tipo Motos
 */
class Motorcycle extends Vehicle
{
    protected $vehicle = 'motos';

    public function getType()
    {
        return $this->vehicle;
    }
}
