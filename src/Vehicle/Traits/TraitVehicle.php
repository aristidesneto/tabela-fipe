<?php

namespace Aristides\TabelaFIPE\Vehicle\Traits;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

trait TraitVehicle
{
    protected $client;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = getUrlFipe();
    }

    public function getBrands()
    {
        try {
            $brands = $this->client->request('GET', "{$this->url}/{$this->vehicle}/marcas");
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $brands->getBody();
    }

    public function getModels(int $brand)
    {
        try {
            $models = $this->client->request('GET', "{$this->url}/{$this->vehicle}/marcas/{$brand}/modelos");
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $models->getBody();
    }

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
