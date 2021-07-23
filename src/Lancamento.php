<?php

namespace Mahout\ERP;

use Curl\Curl;

class Lancamento extends Core
{
    public $id_lancamento;
    public $id_conta;
    public $id_empresa;
    public $id_pedido;
    public $id_armazem;
    public $id_cliente;
    public $id_fornecedor;
    public $id_forma_pagamento;
    public $id_lancamento_status;
    public $id_lancamento_categoria;
    public $id_departamento;
    public $id_usuario_cad;
    public $id_usuario_alt;
    public $valor_lancamento;
    public $data_vencimento_lancamento;
    public $data_competencia_lancamento;
    public $data_pagamento_lancamento;
    public $data_cad_lancamento;
    public $data_alt_lancamento;
    public $obs_lancamento;
    public $desc_lancamento;
    public $num_doc_lancamento;
    public $juros_lancamento;
    public $desconto_lancamento;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento');
    }

    public function reset(): void
    {
        $this->id_lancamento = null;
        $this->id_conta = null;
        $this->id_empresa = null;
        $this->id_pedido = null;
        $this->id_armazem = null;
        $this->id_cliente = null;
        $this->id_fornecedor = null;
        $this->id_forma_pagamento = null;
        $this->id_lancamento_status = null;
        $this->id_lancamento_categoria = null;
        $this->id_departamento = null;
        $this->id_usuario_cad = null;
        $this->id_usuario_alt = null;
        $this->valor_lancamento = null;
        $this->data_vencimento_lancamento = null;
        $this->data_competencia_lancamento = null;
        $this->data_pagamento_lancamento = null;
        $this->data_cad_lancamento = null;
        $this->data_alt_lancamento = null;
        $this->obs_lancamento = null;
        $this->desc_lancamento = null;
        $this->num_doc_lancamento = null;
        $this->juros_lancamento = null;
        $this->desconto_lancamento = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdConta() != '') {
            $vet .= '&id_conta=' . urlencode($this->getIdConta());
        }

        if ($this->getIdEmpresa() != '') {
            $vet .= '&id_empresa=' . urlencode($this->getIdEmpresa());
        }

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        if ($this->getIdFornecedor() != '') {
            $vet .= '&id_fornecedor=' . urlencode($this->getIdFornecedor());
        }

        if ($this->getIdFormaPagamento() != '') {
            $vet .= '&id_forma_pagamento=' . urlencode($this->getIdFormaPagamento());
        }

        if ($this->getIdLancamentoStatus() != '') {
            $vet .= '&id_lancamento_status=' . urlencode($this->getIdLancamentoStatus());
        }

        if ($this->getIdLancamentoCategoria() != '') {
            $vet .= '&id_lancamento_categoria=' . urlencode($this->getIdLancamentoCategoria());
        }

        if ($this->getIdDepartamento() != '') {
            $vet .= '&id_departamento=' . urlencode($this->getIdDepartamento());
        }

        if ($this->getIdUsuarioCad() != '') {
            $vet .= '&id_usuario_cad=' . urlencode($this->getIdUsuarioCad());
        }

        if ($this->getIdUsuarioAlt() != '') {
            $vet .= '&id_usuario_alt=' . urlencode($this->getIdUsuarioAlt());
        }

        if ($this->getValorLancamento() != '') {
            $vet .= '&valor_lancamento=' . urlencode($this->getValorLancamento());
        }

        if ($this->getDataVencimentoLancamento() != '') {
            $vet .= '&data_vencimento_lancamento=' . urlencode($this->getDataVencimentoLancamento());
        }

        if ($this->getDataCompetenciaLancamento() != '') {
            $vet .= '&data_competencia_lancamento=' . urlencode($this->getDataCompetenciaLancamento());
        }

        if ($this->getDataPagamentoLancamento() != '') {
            $vet .= '&data_pagamento_lancamento=' . urlencode($this->getDataPagamentoLancamento());
        }

        if ($this->getDataCadLancamento() != '') {
            $vet .= '&data_cad_lancamento=' . urlencode($this->getDataCadLancamento());
        }

        if ($this->getDataAltLancamento() != '') {
            $vet .= '&data_alt_lancamento=' . urlencode($this->getDataAltLancamento());
        }

        if ($this->getObsLancamento() != '') {
            $vet .= '&obs_lancamento=' . urlencode($this->getObsLancamento());
        }

        if ($this->getDescLancamento() != '') {
            $vet .= '&desc_lancamento=' . urlencode($this->getDescLancamento());
        }

        if ($this->getNumDocLancamento() != '') {
            $vet .= '&num_doc_lancamento=' . urlencode($this->getNumDocLancamento());
        }

        if ($this->getJurosLancamento() != '') {
            $vet .= '&juros_lancamento=' . urlencode($this->getJurosLancamento());
        }

        if ($this->getDescontoLancamento() != '') {
            $vet .= '&desconto_lancamento=' . urlencode($this->getDescontoLancamento());
        }

        return !empty($vet) ? $vet : '';
    }

    public function baixar_estoque($data)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/baixar_estoque/';

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

    /**
     * @return mixed
     */
    public function getIdLancamento()
    {
        return $this->id_lancamento;
    }

    /**
     * @param mixed $id_lancamento
     */
    public function setIdLancamento($id_lancamento): void
    {
        $this->id_lancamento = $id_lancamento;
    }

    /**
     * @return mixed
     */
    public function getIdConta()
    {
        return $this->id_conta;
    }

    /**
     * @param mixed $id_conta
     */
    public function setIdConta($id_conta): void
    {
        $this->id_conta = $id_conta;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * @param mixed $id_empresa
     */
    public function setIdEmpresa($id_empresa): void
    {
        $this->id_empresa = $id_empresa;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente): void
    {
        $this->id_cliente = $id_cliente;
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }

    /**
     * @param mixed $id_fornecedor
     */
    public function setIdFornecedor($id_fornecedor): void
    {
        $this->id_fornecedor = $id_fornecedor;
    }

    /**
     * @return mixed
     */
    public function getIdFormaPagamento()
    {
        return $this->id_forma_pagamento;
    }

    /**
     * @param mixed $id_forma_pagamento
     */
    public function setIdFormaPagamento($id_forma_pagamento): void
    {
        $this->id_forma_pagamento = $id_forma_pagamento;
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoStatus()
    {
        return $this->id_lancamento_status;
    }

    /**
     * @param mixed $id_lancamento_status
     */
    public function setIdLancamentoStatus($id_lancamento_status): void
    {
        $this->id_lancamento_status = $id_lancamento_status;
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoCategoria()
    {
        return $this->id_lancamento_categoria;
    }

    /**
     * @param mixed $id_lancamento_categoria
     */
    public function setIdLancamentoCategoria($id_lancamento_categoria): void
    {
        $this->id_lancamento_categoria = $id_lancamento_categoria;
    }

    /**
     * @return mixed
     */
    public function getIdDepartamento()
    {
        return $this->id_departamento;
    }

    /**
     * @param mixed $id_departamento
     */
    public function setIdDepartamento($id_departamento): void
    {
        $this->id_departamento = $id_departamento;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioCad()
    {
        return $this->id_usuario_cad;
    }

    /**
     * @param mixed $id_usuario_cad
     */
    public function setIdUsuarioCad($id_usuario_cad): void
    {
        $this->id_usuario_cad = $id_usuario_cad;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioAlt()
    {
        return $this->id_usuario_alt;
    }

    /**
     * @param mixed $id_usuario_alt
     */
    public function setIdUsuarioAlt($id_usuario_alt): void
    {
        $this->id_usuario_alt = $id_usuario_alt;
    }

    /**
     * @return mixed
     */
    public function getValorLancamento()
    {
        return $this->valor_lancamento;
    }

    /**
     * @param mixed $valor_lancamento
     */
    public function setValorLancamento($valor_lancamento): void
    {
        $this->valor_lancamento = $valor_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataVencimentoLancamento()
    {
        return $this->data_vencimento_lancamento;
    }

    /**
     * @param mixed $data_vencimento_lancamento
     */
    public function setDataVencimentoLancamento($data_vencimento_lancamento): void
    {
        $this->data_vencimento_lancamento = $data_vencimento_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataCompetenciaLancamento()
    {
        return $this->data_competencia_lancamento;
    }

    /**
     * @param mixed $data_competencia_lancamento
     */
    public function setDataCompetenciaLancamento($data_competencia_lancamento): void
    {
        $this->data_competencia_lancamento = $data_competencia_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataPagamentoLancamento()
    {
        return $this->data_pagamento_lancamento;
    }

    /**
     * @param mixed $data_pagamento_lancamento
     */
    public function setDataPagamentoLancamento($data_pagamento_lancamento): void
    {
        $this->data_pagamento_lancamento = $data_pagamento_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataCadLancamento()
    {
        return $this->data_cad_lancamento;
    }

    /**
     * @param mixed $data_cad_lancamento
     */
    public function setDataCadLancamento($data_cad_lancamento): void
    {
        $this->data_cad_lancamento = $data_cad_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataAltLancamento()
    {
        return $this->data_alt_lancamento;
    }

    /**
     * @param mixed $data_alt_lancamento
     */
    public function setDataAltLancamento($data_alt_lancamento): void
    {
        $this->data_alt_lancamento = $data_alt_lancamento;
    }

    /**
     * @return mixed
     */
    public function getObsLancamento()
    {
        return $this->obs_lancamento;
    }

    /**
     * @param mixed $obs_lancamento
     */
    public function setObsLancamento($obs_lancamento): void
    {
        $this->obs_lancamento = $obs_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDescLancamento()
    {
        return $this->desc_lancamento;
    }

    /**
     * @param mixed $desc_lancamento
     */
    public function setDescLancamento($desc_lancamento): void
    {
        $this->desc_lancamento = $desc_lancamento;
    }

    /**
     * @return mixed
     */
    public function getNumDocLancamento()
    {
        return $this->num_doc_lancamento;
    }

    /**
     * @param mixed $num_doc_lancamento
     */
    public function setNumDocLancamento($num_doc_lancamento): void
    {
        $this->num_doc_lancamento = $num_doc_lancamento;
    }

    /**
     * @return mixed
     */
    public function getJurosLancamento()
    {
        return $this->juros_lancamento;
    }

    /**
     * @param mixed $juros_lancamento
     */
    public function setJurosLancamento($juros_lancamento): void
    {
        $this->juros_lancamento = $juros_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDescontoLancamento()
    {
        return $this->desconto_lancamento;
    }

    /**
     * @param mixed $desconto_lancamento
     */
    public function setDescontoLancamento($desconto_lancamento): void
    {
        $this->desconto_lancamento = $desconto_lancamento;
    }

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedido($id_pedido): void
    {
        $this->id_pedido = $id_pedido;
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
    public function setIdArmazem($id_armazem): void
    {
        $this->id_armazem = $id_armazem;
    }
}
