<?php

namespace Aristides\TabelaFIPE\Veiculo;

use Aristides\TabelaFIPE\Veiculo\Contratos\IVeiculo;
use Aristides\TabelaFIPE\Veiculo\Traits\TraitVeiculo;

/**
 * Para pesquisas do tipo Motos
 */
class Motos implements IVeiculo
{
    use TraitVeiculo;
}
