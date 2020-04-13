<?php

namespace Aristides\TabelaFIPE;

use Aristides\TabelaFIPE\Veiculo\Contratos\IVeiculo;

class TabelaFipe
{
    /**
     * @var IVeiculo
     */
    protected $veiculo;

    /**
     * Recebe uma instancia de Veículo
     *
     * @param IVeiculo $veiculo
     */
    public function __construct(IVeiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    /**
     * Retorna todas as marcas do veículo
     *
     * @return json
     */
    public function marcas()
    {
        return $this->veiculo->getMarcas();
    }

    /**
     * Retorna os modelos
     *
     * @param integer ID da marca
     * @return json
     */
    public function modelos(int $marca)
    {
        return $this->veiculo->getModelos($marca);
    }

    /**
     * Retorna os anos
     *
     * @param integer ID da marca
     * @param integer ID do modelo
     * @return json
     */
    public function anos(int $marca, int $modelo)
    {
        return $this->veiculo->getAnos($marca, $modelo);
    }

    /**
     * Retorna o preços
     *
     * @param integer ID da marca
     * @param integer ID do modelo
     * @param string Ano referente
     * @return json
     */
    public function preco(int $marca, int $modelo, string $ano)
    {
        return $this->veiculo->getPreco($marca, $modelo, $ano);
    }
}
