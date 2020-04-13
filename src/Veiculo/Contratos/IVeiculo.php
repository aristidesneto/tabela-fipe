<?php

namespace Aristides\TabelaFIPE\Veiculo\Contratos;

interface IVeiculo
{
    /** Marcas */
    public function getMarcas();

    /** Modelos */
    public function getModelos(int $marca);

    /** Anos */
    public function getAnos(int $marca, int $modelo);

    /** Preço */
    public function getPreco(int $marca, int $modelo, string $ano);
}
