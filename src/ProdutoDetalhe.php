<?php

namespace Mahout\ERP;

class ProdutoDetalhe extends Core
{
    public $id_produto_detalhe;
    public $altura_produto_detalhe;
    public $comprimento_produto_detalhe;
    public $id_medida;
    public $id_produto;
    public $id_produto_detalhe_status;
    public $largura_produto_detalhe;
    public $peso_bruto_produto_detalhe;
    public $peso_liquido_produto_detalhe;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_detalhe');
    }

    public function reset(): void
    {
        $this->id_produto_detalhe = null;
        $this->altura_produto_detalhe = null;
        $this->comprimento_produto_detalhe = null;
        $this->id_medida = null;
        $this->id_produto = null;
        $this->id_produto_detalhe_status = null;
        $this->largura_produto_detalhe = null;
        $this->peso_bruto_produto_detalhe = null;
        $this->peso_liquido_produto_detalhe = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProdutoDetalhe() != '') {
            $vet .= '&id_produto_detalhe=' . urlencode($this->getIdProdutoDetalhe());
        }

        if ($this->getAlturaProdutoDetalhe() != '') {
            $vet .= '&altura_produto_detalhe=' . urlencode($this->getAlturaProdutoDetalhe());
        }

        if ($this->getComprimentoProdutoDetalhe() != '') {
            $vet .= '&comprimento_produto_detalhe=' . urlencode($this->getComprimentoProdutoDetalhe());
        }

        if ($this->getIdMedida() != '') {
            $vet .= '&id_medida=' . urlencode($this->getIdMedida());
        }

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getIdProdutoDetalheStatus() != '') {
            $vet .= '&id_produto_detalhe_status=' . urlencode($this->getIdProdutoDetalheStatus());
        }

        if ($this->getLarguraProdutoDetalhe() != '') {
            $vet .= '&largura_produto_detalhe=' . urlencode($this->getLarguraProdutoDetalhe());
        }

        if ($this->getPesoBrutoProdutoDetalhe() != '') {
            $vet .= '&peso_bruto_produto_detalhe=' . urlencode($this->getPesoLiquidoProdutoDetalhe());
        }

        if ($this->getPesoLiquidoProdutoDetalhe() != '') {
            $vet .= '&peso_liquido_produto_detalhe=' . urlencode($this->getPesoLiquidoProdutoDetalhe());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoDetalhe()
    {
        return $this->id_produto_detalhe;
    }

    /**
     * @param mixed $id_produto_detalhe
     */
    public function setIdProdutoDetalhe($id_produto_detalhe): void
    {
        $this->id_produto_detalhe = $id_produto_detalhe;
    }

    /**
     * @return mixed
     */
    public function getAlturaProdutoDetalhe()
    {
        return $this->altura_produto_detalhe;
    }

    /**
     * @param mixed $altura_produto_detalhe
     */
    public function setAlturaProdutoDetalhe($altura_produto_detalhe): void
    {
        $this->altura_produto_detalhe = $altura_produto_detalhe;
    }

    /**
     * @return mixed
     */
    public function getComprimentoProdutoDetalhe()
    {
        return $this->comprimento_produto_detalhe;
    }

    /**
     * @param mixed $comprimento_produto_detalhe
     */
    public function setComprimentoProdutoDetalhe($comprimento_produto_detalhe): void
    {
        $this->comprimento_produto_detalhe = $comprimento_produto_detalhe;
    }

    /**
     * @return mixed
     */
    public function getIdMedida()
    {
        return $this->id_medida;
    }

    /**
     * @param mixed $id_medida
     */
    public function setIdMedida($id_medida): void
    {
        $this->id_medida = $id_medida;
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
    public function getIdProdutoDetalheStatus()
    {
        return $this->id_produto_detalhe_status;
    }

    /**
     * @param mixed $id_produto_detalhe_status
     */
    public function setIdProdutoDetalheStatus($id_produto_detalhe_status): void
    {
        $this->id_produto_detalhe_status = $id_produto_detalhe_status;
    }

    /**
     * @return mixed
     */
    public function getLarguraProdutoDetalhe()
    {
        return $this->largura_produto_detalhe;
    }

    /**
     * @param mixed $largura_produto_detalhe
     */
    public function setLarguraProdutoDetalhe($largura_produto_detalhe): void
    {
        $this->largura_produto_detalhe = $largura_produto_detalhe;
    }

    /**
     * @return mixed
     */
    public function getPesoBrutoProdutoDetalhe()
    {
        return $this->peso_bruto_produto_detalhe;
    }

    /**
     * @param mixed $peso_bruto_produto_detalhe
     */
    public function setPesoBrutoProdutoDetalhe($peso_bruto_produto_detalhe): void
    {
        $this->peso_bruto_produto_detalhe = $peso_bruto_produto_detalhe;
    }

    /**
     * @return mixed
     */
    public function getPesoLiquidoProdutoDetalhe()
    {
        return $this->peso_liquido_produto_detalhe;
    }

    /**
     * @param mixed $peso_liquido_produto_detalhe
     */
    public function setPesoLiquidoProdutoDetalhe($peso_liquido_produto_detalhe): void
    {
        $this->peso_liquido_produto_detalhe = $peso_liquido_produto_detalhe;
    }
}
