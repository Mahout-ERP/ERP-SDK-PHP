<?php

namespace Mahout\ERP;

class ProdutoEstoque extends Core
{
    public $id_armazem_produto;
    public $id_produto;
    public $id_armazem;
    public $id_armazem_produto_status;
    public $posicao_armazem_produto;
    public $qtd_limite_armazem_produto;
    public $qtd_min_armazem_produto;
    public $qtd_total_armazem_produto;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('armazem_produto');
    }

    public function reset(): void
    {
        $this->id_armazem_produto = null;
        $this->id_produto = null;
        $this->id_armazem = null;
        $this->id_armazem_produto_status = null;
        $this->posicao_armazem_produto = null;
        $this->qtd_limite_armazem_produto = null;
        $this->qtd_min_armazem_produto = null;
        $this->qtd_total_armazem_produto = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getIdArmazem() != '') {
            $vet .= '&id_armazem=' . urlencode($this->getIdArmazem());
        }

        if ($this->getIdArmazemProdutoStatus() != '') {
            $vet .= '&id_armazem_produto_status=' . urlencode($this->getIdArmazemProdutoStatus());
        }

        if ($this->getPosicaoArmazemProduto() != '') {
            $vet .= '&posicao_armazem_produto=' . urlencode($this->getPosicaoArmazemProduto());
        }

        if ($this->getQtdLimiteArmazemProduto() != '') {
            $vet .= '&qtd_limite_armazem_produto=' . urlencode($this->getQtdLimiteArmazemProduto());
        }

        if ($this->getQtdMinArmazemProduto() != '') {
            $vet .= '&qtd_min_armazem_produto=' . urlencode($this->getQtdMinArmazemProduto());
        }

        if ($this->getQtdTotalArmazemProduto() != '') {
            $vet .= '&qtd_total_armazem_produto=' . urlencode($this->getQtdTotalArmazemProduto());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdArmazemProduto()
    {
        return $this->id_armazem_produto;
    }

    /**
     * @param int $id_armazem_produto
     */
    public function setIdArmazemProduto(int $id_armazem_produto)
    {
        $this->id_armazem_produto = $id_armazem_produto;
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param int $id_produto
     */
    public function setIdProduto(int $id_produto)
    {
        $this->id_produto = $id_produto;
    }

    /**
     * @return mixed
     */
    public function getIdArmazem()
    {
        return $this->id_armazem;
    }

    /**
     * @param mixed $id_armazem
     */
    public function setIdArmazem($id_armazem)
    {
        $this->id_armazem = $id_armazem;
    }

    /**
     * @return mixed
     */
    public function getIdArmazemProdutoStatus()
    {
        return $this->id_armazem_produto_status;
    }

    /**
     * @param mixed $id_armazem_produto_status
     */
    public function setIdArmazemProdutoStatus(int $id_armazem_produto_status)
    {
        $this->id_armazem_produto_status = $id_armazem_produto_status;
    }

    /**
     * @return mixed
     */
    public function getPosicaoArmazemProduto()
    {
        return $this->posicao_armazem_produto;
    }

    /**
     * @param mixed $posicao_armazem_produto
     */
    public function setPosicaoArmazemProduto(string $posicao_armazem_produto)
    {
        $this->posicao_armazem_produto = $posicao_armazem_produto;
    }

    /**
     * @return mixed
     */
    public function getQtdLimiteArmazemProduto()
    {
        return $this->qtd_limite_armazem_produto;
    }

    /**
     * @param mixed $qtd_limite_armazem_produto
     */
    public function setQtdLimiteArmazemProduto($qtd_limite_armazem_produto)
    {
        $this->qtd_limite_armazem_produto = $qtd_limite_armazem_produto;
    }

    /**
     * @return mixed
     */
    public function getQtdMinArmazemProduto()
    {
        return $this->qtd_min_armazem_produto;
    }

    /**
     * @param mixed $qtd_min_armazem_produto
     */
    public function setQtdMinArmazemProduto($qtd_min_armazem_produto)
    {
        $this->qtd_min_armazem_produto = $qtd_min_armazem_produto;
    }

    /**
     * @return mixed
     */
    public function getQtdTotalArmazemProduto()
    {
        return $this->qtd_total_armazem_produto;
    }

    /**
     * @param mixed $qtd_total_armazem_produto
     */
    public function setQtdTotalArmazemProduto($qtd_total_armazem_produto)
    {
        $this->qtd_total_armazem_produto = $qtd_total_armazem_produto;
    }
}
