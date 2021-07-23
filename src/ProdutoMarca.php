<?php

namespace Mahout\ERP;

class ProdutoMarca extends Core
{
    public $id_produto_marca;
    public $desc_produto_marca;
    public $id_produto_marca_status;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_marca');
    }

    public function reset(): void
    {
        $this->desc_produto_marca = null;
        $this->id_produto_marca_status = null;
        $this->id_produto_marca = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProdutoMarca() != '') {
            $vet .= '&id_produto_marca=' . urlencode($this->getIdProdutoMarca());
        }

        if ($this->getDescProdutoMarca() != '') {
            $vet .= '&desc_produto_marca=' . urlencode($this->getDescProdutoMarca());
        }

        if ($this->getIdProdutoMarcaStatus() != '') {
            $vet .= '&id_produto_marca_status=' . urlencode($this->getIdProdutoMarcaStatus());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoMarca()
    {
        return $this->id_produto_marca;
    }

    /**
     * @param mixed $id_produto_marca
     */
    public function setIdProdutoMarca($id_produto_marca): void
    {
        $this->id_produto_marca = $id_produto_marca;
    }

    /**
     * @return mixed
     */
    public function getDescProdutoMarca()
    {
        return $this->desc_produto_marca;
    }

    /**
     * @param mixed $desc_produto_marca
     */
    public function setDescProdutoMarca($desc_produto_marca): void
    {
        $this->desc_produto_marca = $desc_produto_marca;
    }

    /**
     * @return mixed
     */
    public function getIdProdutoMarcaStatus()
    {
        return $this->id_produto_marca_status;
    }

    /**
     * @param mixed $id_produto_marca_status
     */
    public function setIdProdutoMarcaStatus($id_produto_marca_status): void
    {
        $this->id_produto_marca_status = $id_produto_marca_status;
    }

}
