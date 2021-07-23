<?php

namespace Mahout\ERP;

class ProdutoAnexo extends Core
{
    public $id_produto_anexo;
    public $id_produto;
    public $id_anexo;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_anexo');
    }

    public function reset(): void
    {
        $this->id_produto_anexo = null;
        $this->id_produto = null;
        $this->id_anexo = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getIdAnexo() != '') {
            $vet .= '&id_anexo=' . urlencode($this->getIdAnexo());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoAnexo()
    {
        return $this->id_produto_anexo;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProdutoAnexo(int $id_produto_anexo)
    {
        $this->id_produto_anexo = $id_produto_anexo;
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
    public function setIdProduto(int $id_produto)
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getIdAnexo()
    {
        return $this->id_anexo;
    }

    /**
     * @param mixed $id_anexo
     */
    public function setIdAnexo(int $id_anexo)
    {
        $this->id_anexo = $id_anexo;
    }
}
