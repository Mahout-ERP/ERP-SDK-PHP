<?php

namespace Mahout\ERP;

use Curl\Curl;

class Core
{
    private $baseUrl;
    private $publicKey;
    private $token;
    private $entity;
    protected $curl;
    private $url;
    private $data;

    public function __construct($baseUrl, $publicKey, $token)
    {
        $this->baseUrl = $baseUrl;
        $this->publicKey = $publicKey;
        $this->token = $token;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function setPublicKey(string $publicKey)
    {
        $this->publicKey = $publicKey;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token)
    {
        $this->token = $token;
    }

    public function getEntity(): string
    {
        return $this->entity;
    }

    public function setEntity(string $entity)
    {
        $this->entity = $entity;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getCurl()
    {
        return $this->curl;
    }

    public function filter(): string
    {
        return '';
    }

    public function get(int $id): object
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/get/' . $id;

            $this->setUrl($url);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->get($url);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }

    public function listar(int $limit = 100, int $offset = 0)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/listar';
            $url .= '?limit=' . $limit;
            $url .= '&offset=' . $offset;
            $url .= $this->filter();

            $this->setUrl($url);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->get($url);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }

    public function inserir($data)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/inserir/';

            $this->setUrl($url);
            $this->setData($data);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->post($url, $data);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }

    public function alterar(int $id, $data)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/alterar/' . $id;

            $this->setUrl($url);
            $this->setData($data);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->put($url, $data);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }

    public function excluir(int $id)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/excluir/' . $id;

            $this->setUrl($url);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->delete($url);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }
}
