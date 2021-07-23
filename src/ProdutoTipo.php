<?php

namespace Mahout\ERP;

class ProdutoTipo extends Core
{
    public $id_produto_categoria;
    public $nome_produto_categoria;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_tipo');
    }

    public function reset(): void
    {
        $this->id_produto_categoria = null;
        $this->nome_produto_categoria = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProdutoCategoria()!= '') {
            $vet .= '&id_produto_categoria=' . urlencode($this->getIdProdutoCategoria());
        }

        if ($this->getNomeProdutoCategoria() != '') {
            $vet .= '&nome_produto_categoria=' . urlencode($this->getNomeProdutoCategoria());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoCategoria()
    {
        return $this->id_produto_categoria;
    }

    /**
     * @param mixed $id_produto_categoria
     */
    public function setIdProdutoCategoria($id_produto_categoria): void
    {
        $this->id_produto_categoria = $id_produto_categoria;
    }

    /**
     * @return mixed
     */
    public function getNomeProdutoCategoria()
    {
        return $this->nome_produto_categoria;
    }

    /**
     * @param mixed $nome_produto_categoria
     */
    public function setNomeProdutoCategoria($nome_produto_categoria): void
    {
        $this->nome_produto_categoria = $nome_produto_categoria;
    }
}