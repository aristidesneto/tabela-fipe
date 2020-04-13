<?php

namespace Aristides\TabelaFIPE\Veiculo;

use Aristides\TabelaFIPE\Veiculo\Contratos\IVeiculo;
use Aristides\TabelaFIPE\Veiculo\Traits\TraitVeiculo;

/**
 * Para pesquisas do tipo Carros
 */
class Carros implements IVeiculo
{
    use TraitVeiculo;

    protected $veiculo = 'carros';
}
