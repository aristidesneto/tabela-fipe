<?php

namespace Aristides\TabelaFIPE;

use Aristides\TabelaFIPE\Vehicle\Contracts\IVehicle;

class TabelaFipe
{
    /**
     * @var IVehicle
     */
    protected $vechile;

    /**
     * Recebe uma instancia de Veículo
     *
     * @param IVehicle $vechile
     */
    public function __construct(IVehicle $vechile)
    {
        $this->vechile = $vechile;
    }

    /**
     * Retorna todas as marcas do veículo
     *
     * @return void
     */
    public function marcas()
    {
        return $this->vechile->getBrands();
    }

    /**
     * Retorna os modelos
     *
     * @param integer ID da marca
     * @return void
     */
    public function modelos(int $marca)
    {
        return $this->vechile->getModels($marca);
    }

    /**
     * Retorna os anos
     *
     * @param integer ID da marca
     * @param integer ID do modelo
     * @return void
     */
    public function ano(int $marca, int $modelo)
    {
        return $this->vechile->getYears($marca, $modelo);
    }

    /**
     * Retorna o preços
     *
     * @param integer ID da marca
     * @param integer ID do modelo
     * @param string Ano referente
     * @return void
     */
    public function preco(int $marca, int $modelo, string $ano)
    {
        return $this->vechile->getPrice($marca, $modelo, $ano);
    }
}
