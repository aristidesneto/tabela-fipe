<?php

namespace Aristides\TabelaFIPE\Veiculo\Traits;

use GuzzleHttp\Psr7;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

trait TraitVeiculo
{
    protected $client;
    protected $url;

    public function __construct()
    {
        $this->client = new Client();
        $this->url = getUrlFipe();
    }

    public function getMarcas()
    {
        try {
            $marcas = $this->client->request('GET', "{$this->url}/{$this->veiculo}/marcas");
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $marcas->getBody();
    }

    public function getModelos(int $marca)
    {
        try {
            $modelos = $this->client->request(
                'GET', "{$this->url}/{$this->veiculo}/marcas/{$marca}/modelos"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $modelos->getBody();
    }

    public function getAnos(int $marca, int $modelo)
    {
        try {
            $anos = $this->client->request(
                'GET', "{$this->url}/{$this->veiculo}/marcas/{$marca}/modelos/{$modelo}/anos"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $anos->getBody();
    }

    public function getPreco(int $marca, int $modelo, string $ano)
    {
        try {
            $preco = $this->client->request(
                'GET', "{$this->url}/{$this->veiculo}/marcas/{$marca}/modelos/{$modelo}/anos/{$ano}"
            );
        } catch (ClientException $e) {
            echo Psr7\str($e->getRequest());
            echo Psr7\str($e->getResponse());
        }

        return $preco->getBody();
    }
}
