<?php

namespace Aristides\TabelaFIPE;

use Aristides\TabelaFIPE\Vehicle\Vehicle;

/**
 * Para pesquisas do tipo Caminhões
 */
class Trucks extends Vehicle
{
    protected $vehicle = 'caminhoes';

    public function getType()
    {
        return $this->vehicle;
    }
}
