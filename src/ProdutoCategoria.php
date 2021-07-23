<?php

namespace Mahout\ERP;

class ProdutoCategoria extends Core
{
    public $id_produto_tipo;
    public $desc_produto_tipo;
    public $id_produto_tipo_status;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_tipo');
    }

    public function reset(): void
    {
        $this->id_produto_tipo = null;
        $this->desc_produto_tipo = null;
        $this->id_produto_tipo_status = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProdutoTipo() != '') {
            $vet .= '&id_produto_tipo=' . urlencode($this->getIdProdutoTipo());
        }

        if ($this->getDescProdutoTipo() != '') {
            $vet .= '&desc_produto_tipo=' . urlencode($this->getDescProdutoTipo());
        }

        if ($this->getIdProdutoTipoStatus() != '') {
            $vet .= '&id_produto_tipo_status=' . urlencode($this->getIdProdutoTipoStatus());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoTipo()
    {
        return $this->id_produto_tipo;
    }

    /**
     * @param mixed $id_produto_tipo
     */
    public function setIdProdutoTipo($id_produto_tipo): void
    {
        $this->id_produto_tipo = $id_produto_tipo;
    }

    /**
     * @return mixed
     */
    public function getDescProdutoTipo()
    {
        return $this->desc_produto_tipo;
    }

    /**
     * @param mixed $desc_produto_tipo
     */
    public function setDescProdutoTipo($desc_produto_tipo): void
    {
        $this->desc_produto_tipo = $desc_produto_tipo;
    }

    /**
     * @return mixed
     */
    public function getIdProdutoTipoStatus()
    {
        return $this->id_produto_tipo_status;
    }

    /**
     * @param mixed $id_produto_tipo_status
     */
    public function setIdProdutoTipoStatus($id_produto_tipo_status): void
    {
        $this->id_produto_tipo_status = $id_produto_tipo_status;
    }
}