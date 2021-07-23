<?php

namespace Mahout\ERP;

class Produto extends Core
{
    public $id_produto;
    public $id_cest;
    public $id_cfop;
    public $id_empresa;
    public $id_ncm;
    public $id_produto_categoria;
    public $id_produto_marca;
    public $id_produto_status;
    public $id_produto_tipo;
    public $nome_produto;
    public $codigo_produto;
    public $comissao_produto;
    public $desc_produto;
    public $ean_produto;
    public $modelo_produto;
    public $serie_produto;
    public $valor_produto;
    public $valor_custo_produto;
    public $valor_locacao_produto;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto');
    }

    public function reset(): void
    {
        $this->id_produto = null;
        $this->id_cest = null;
        $this->id_cfop = null;
        $this->id_empresa = null;
        $this->id_ncm = null;
        $this->id_produto_categoria = null;
        $this->id_produto_marca = null;
        $this->id_produto_status = null;
        $this->id_produto_tipo = null;
        $this->nome_produto = null;
        $this->codigo_produto = null;
        $this->comissao_produto = null;
        $this->desc_produto = null;
        $this->ean_produto = null;
        $this->modelo_produto = null;
        $this->serie_produto = null;
        $this->valor_produto = null;
        $this->valor_custo_produto = null;
        $this->valor_locacao_produto = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdCest() != '') {
            $vet .= '&id_cest=' . urlencode($this->getIdCest());
        }

        if ($this->getIdCfop() != '') {
            $vet .= '&id_cfop=' . urlencode($this->getIdCfop());
        }

        if ($this->getIdEmpresa() != '') {
            $vet .= '&id_empresa=' . urlencode($this->getIdEmpresa());
        }

        if ($this->getIdNcm() != '') {
            $vet .= '&id_ncm=' . urlencode($this->getIdNcm());
        }

        if ($this->getIdProdutoCategoria() != '') {
            $vet .= '&id_produto_categoria=' . urlencode($this->getIdProdutoCategoria());
        }

        if ($this->getIdProdutoMarca() != '') {
            $vet .= '&id_produto_marca=' . urlencode($this->getIdProdutoMarca());
        }

        if ($this->getIdProdutoStatus() != '') {
            $vet .= '&id_produto_status=' . urlencode($this->getIdProdutoStatus());
        }

        if ($this->getIdProdutoTipo() != '') {
            $vet .= '&id_produto_tipo=' . urlencode($this->getIdProdutoTipo());
        }

        if ($this->getNomeProduto() != '') {
            $vet .= '&nome_produto=' . urlencode($this->getNomeProduto());
        }

        if ($this->getCodigoProduto() != '') {
            $vet .= '&codigo_produto=' . urlencode($this->getCodigoProduto());
        }

        if ($this->getComissaoProduto() != '') {
            $vet .= '&comissao_produto=' . urlencode($this->getComissaoProduto());
        }

        if ($this->getDescProduto() != '') {
            $vet .= '&desc_produto=' . urlencode($this->getDescProduto());
        }

        if ($this->getEanProduto() != '') {
            $vet .= '&ean_produto=' . urlencode($this->getEanProduto());
        }

        if ($this->getModeloProduto() != '') {
            $vet .= '&modelo_produto=' . urlencode($this->getModeloProduto());
        }

        if ($this->getSerieProduto() != '') {
            $vet .= '&serie_produto=' . urlencode($this->getSerieProduto());
        }

        if ($this->getValorProduto() != '') {
            $vet .= '&valor_produto=' . urlencode($this->getValorProduto());
        }

        if ($this->getValorCustoProduto() != '') {
            $vet .= '&valor_custo_produto=' . urlencode($this->getValorCustoProduto());
        }

        if ($this->getValorLocacaoProduto() != '') {
            $vet .= '&valor_locacao_produto=' . urlencode($this->getValorLocacaoProduto());
        }

        return !empty($vet) ? $vet : '';
    }

    public function getIdProduto()
    {
        return $this->id_produto;
    }

    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }

    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }

    public function getCodigoProduto()
    {
        return $this->codigo_produto;
    }

    public function setCodigoProduto(string $codigo_produto)
    {
        $this->codigo_produto = $codigo_produto;
    }

    public function getComissaoProduto()
    {
        return $this->comissao_produto;
    }

    public function setComissaoProduto($comissao_produto)
    {
        $this->comissao_produto = $comissao_produto;
    }

    public function getDescProduto()
    {
        return $this->desc_produto;
    }

    public function setDescProduto($desc_produto)
    {
        $this->desc_produto = $desc_produto;
    }

    public function getEanProduto()
    {
        return $this->ean_produto;
    }

    public function setEanProduto($ean_produto)
    {
        $this->ean_produto = $ean_produto;
    }

    public function getIdCest()
    {
        return $this->id_cest;
    }

    public function setIdCest($id_cest)
    {
        $this->id_cest = $id_cest;
    }

    public function getIdCfop()
    {
        return $this->id_cfop;
    }

    public function setIdCfop($id_cfop)
    {
        $this->id_cfop = $id_cfop;
    }

    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    public function setIdEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }

    public function getIdNcm()
    {
        return $this->id_ncm;
    }

    public function setIdNcm($id_ncm)
    {
        $this->id_ncm = $id_ncm;
    }

    public function getIdProdutoCategoria()
    {
        return $this->id_produto_categoria;
    }

    public function setIdProdutoCategoria($id_produto_categoria)
    {
        $this->id_produto_categoria = $id_produto_categoria;
    }

    public function getIdProdutoMarca()
    {
        return $this->id_produto_marca;
    }

    public function setIdProdutoMarca($id_produto_marca)
    {
        $this->id_produto_marca = $id_produto_marca;
    }

    public function getIdProdutoStatus()
    {
        return $this->id_produto_status;
    }

    public function setIdProdutoStatus($id_produto_status)
    {
        $this->id_produto_status = $id_produto_status;
    }

    public function getIdProdutoTipo()
    {
        return $this->id_produto_tipo;
    }

    public function setIdProdutoTipo($id_produto_tipo)
    {
        $this->id_produto_tipo = $id_produto_tipo;
    }

    public function getModeloProduto()
    {
        return $this->modelo_produto;
    }

    public function setModeloProduto($modelo_produto)
    {
        $this->modelo_produto = $modelo_produto;
    }

    public function getSerieProduto()
    {
        return $this->serie_produto;
    }

    public function setSerieProduto($serie_produto)
    {
        $this->serie_produto = $serie_produto;
    }

    public function getValorProduto()
    {
        return $this->valor_produto;
    }

    public function setValorProduto($valor_produto)
    {
        $this->valor_produto = $valor_produto;
    }

    public function getValorCustoProduto()
    {
        return $this->valor_custo_produto;
    }

    public function setValorCustoProduto($valor_custo_produto)
    {
        $this->valor_custo_produto = $valor_custo_produto;
    }

    public function getValorLocacaoProduto()
    {
        return $this->valor_locacao_produto;
    }

    public function setValorLocacaoProduto($valor_locacao_produto)
    {
        $this->valor_locacao_produto = $valor_locacao_produto;
    }
}
