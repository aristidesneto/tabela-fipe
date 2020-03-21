<?php

namespace Aristides\TabelaFIPE\Vehicle;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

abstract class Vehicle
{
    /**
     * URL base
     *
     * @var string
     */
    protected $url = 'https://parallelum.com.br/fipe/api/v1';

    /**
     * Tipo do veículo - carros, motos ou caminhoes
     * Valor Default: carros
     *
     * @var string
     */
    protected $vehicle = 'carros';

    /**
     * @var Client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Retorna as marcas referente ao veículo
     *
     * @return void
     */
    public function getBrands()
    {
        try {
            $brands = $this->client->request(
                'GET', "{$this->url}/{$this->vehicle}/marcas"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $brands->getBody();
    }

    /**
     * Retorna os modelos referente a marca
     *
     * @param integer $brand - Marca do veículo
     * @return void
     */
    public function getModels(int $brand)
    {
        try {
            $models = $this->client->request(
                'GET', "{$this->url}/{$this->vehicle}/marcas/{$brand}/modelos"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $models->getBody();
    }

    /**
     * Retorna os anos referente ao modelo
     *
     * @param integer $brand - Marca do veículo
     * @param integer $model - Modelo do veículo
     * @return void
     */
    public function getYears(int $brand, int $model)
    {
        try {
            $years = $this->client->request(
                'GET', "{$this->url}/{$this->vehicle}/marcas/{$brand}/modelos/{$model}/anos"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $years->getBody();
    }

    /**
     * Retorna os dados do veículo
     *
     * @param integer $brand - Marca do veículo
     * @param integer $model - Modelo do veícu
     * @param string $year - Ano do veículo
     * @return void
     */
    public function getPrice(int $brand, int $model, string $year)
    {
        try {
            $price = $this->client->request(
                'GET', "{$this->url}/{$this->vehicle}/marcas/{$brand}/modelos/{$model}/anos/{$year}"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $price->getBody();
    }
}
