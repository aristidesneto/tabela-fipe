<?php

namespace Aristides\TabelaFIPE\Veiculo;


use Aristides\TabelaFIPE\Veiculo\Contratos\IVeiculo;
use Aristides\TabelaFIPE\Veiculo\Traits\TraitVeiculo;

/**
 * Para pesquisas do tipo Caminhões
 */
class Caminhoes implements IVeiculo
{
    use TraitVeiculo;
}
