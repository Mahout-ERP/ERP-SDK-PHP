<?php

namespace Mahout\ERP;

class EnvioItem extends Core
{
    public $id_envio;
    public $id_produto;
    public $peso_cubado_envio_item;
    public $peso_real_envio_item;
    public $preco_envio_item;
    public $qtd_envio_item;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio_item');
    }

    public function reset(): void
    {
        $this->id_envio = null;
        $this->id_produto = null;
        $this->peso_cubado_envio_item = null;
        $this->peso_real_envio_item = null;
        $this->preco_envio_item = null;
        $this->qtd_envio_item = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getPesoCubadoEnvioItem() != '') {
            $vet .= '&peso_cubado_envio_item=' . urlencode($this->getPesoCubadoEnvioItem());
        }

        if ($this->getPesoRealEnvioItem() != '') {
            $vet .= '&peso_real_envio_item=' . urlencode($this->getPesoRealEnvioItem());
        }

        if ($this->getPrecoEnvioItem() != '') {
            $vet .= '&preco_envio_item=' . urlencode($this->getPrecoEnvioItem());
        }

        if ($this->getQtdEnvioItem() != '') {
            $vet .= '&qtd_envio_item =' . urlencode($this->getQtdEnvioItem());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdEnvio()
    {
        return $this->id_envio;
    }

    /**
     * @param mixed $id_envio
     */
    public function setIdEnvio($id_envio): void
    {
        $this->id_envio = $id_envio;
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto): void
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getPesoCubadoEnvioItem()
    {
        return $this->peso_cubado_envio_item;
    }

    /**
     * @param mixed $peso_cubado_envio_item
     */
    public function setPesoCubadoEnvioItem($peso_cubado_envio_item): void
    {
        $this->peso_cubado_envio_item = $peso_cubado_envio_item;
    }

    /**
     * @return mixed
     */
    public function getPesoRealEnvioItem()
    {
        return $this->peso_real_envio_item;
    }

    /**
     * @param mixed $peso_real_envio_item
     */
    public function setPesoRealEnvioItem($peso_real_envio_item): void
    {
        $this->peso_real_envio_item = $peso_real_envio_item;
    }

    /**
     * @return mixed
     */
    public function getPrecoEnvioItem()
    {
        return $this->preco_envio_item;
    }

    /**
     * @param mixed $preco_envio_item
     */
    public function setPrecoEnvioItem($preco_envio_item): void
    {
        $this->preco_envio_item = $preco_envio_item;
    }

    /**
     * @return mixed
     */
    public function getQtdEnvioItem()
    {
        return $this->qtd_envio_item;
    }

    /**
     * @param mixed $qtd_envio_item
     */
    public function setQtdEnvioItem($qtd_envio_item): void
    {
        $this->qtd_envio_item = $qtd_envio_item;
    }
}
