<?php

namespace Aristides\TabelaFIPE\Vehicle\Contracts;

interface IVehicle
{
    /** Marcas */
    public function getBrands();

    /** Modelos */
    public function getModels(int $brand);

    /** Anos */
    public function getYears(int $brand, int $model);

    /** Preço */
    public function getPrice(int $brand, int $model, string $year);
}
