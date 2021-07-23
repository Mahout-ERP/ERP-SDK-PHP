<?php

namespace Mahout\ERP;

class ProdutoKit extends Core
{
    public $id_produto_kit;
    public $id_produto;
    public $id_produto_pai;
    public $qtd_produto_kit;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_kit');
    }

    public function reset(): void
    {
        $this->id_produto_kit = null;
        $this->id_produto = null;
        $this->id_produto_pai = null;
        $this->qtd_produto_kit = null;

    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getIdProdutoPai() != '') {
            $vet .= '&id_produto_pai=' . urlencode($this->getIdProdutoPai());
        }

        if ($this->getQtdProdutoKit() != '') {
            $vet .= '&qtd_produto_kit=' . urlencode($this->getQtdProdutoKit());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoKit()
    {
        return $this->id_produto_kit;
    }

    /**
     * @param mixed $id_produto_kit
     */
    public function setIdProdutoKit($id_produto_kit): void
    {
        $this->id_produto_kit = $id_produto_kit;
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
    public function getIdProdutoPai()
    {
        return $this->id_produto_pai;
    }

    /**
     * @param mixed $id_produto_pai
     */
    public function setIdProdutoPai($id_produto_pai): void
    {
        $this->id_produto_pai = $id_produto_pai;
    }

    /**
     * @return mixed
     */
    public function getQtdProdutoKit()
    {
        return $this->qtd_produto_kit;
    }

    /**
     * @param mixed $qtd_produto_kit
     */
    public function setQtdProdutoKit($qtd_produto_kit): void
    {
        $this->qtd_produto_kit = $qtd_produto_kit;
    }
}
