<?php

namespace Mahout\ERP;

class Envio extends Core
{
    public $id_pedido;
    public $id_envio_status;
    public $data_cad_envio;
    public $data_envio_envio;
    public $data_entrega_envio;
    public $data_previsao_envio;
    public $rastreamento_envio;
    public $titulo_envio;
    public $valor_venda_envio;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio');
    }

    public function reset(): void
    {
        $this->id_pedido = null;
        $this->id_envio_status = null;
        $this->data_cad_envio = null;
        $this->data_envio_envio = null;
        $this->data_entrega_envio = null;
        $this->data_previsao_envio = null;
        $this->rastreamento_envio = null;
        $this->titulo_envio = null;
        $this->valor_venda_envio = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdEnvioStatus() != '') {
            $vet .= '&id_envio_status=' . urlencode($this->getIdEnvioStatus());
        }

        if ($this->getDataCadEnvio() != '') {
            $vet .= '&data_cad_envio=' . urlencode($this->getDataCadEnvio());
        }

        if ($this->getDataEnvioEnvio() != '') {
            $vet .= '&data_envio_envio=' . urlencode($this->getDataEnvioEnvio());
        }

        if ($this->getDataEntregaEnvio() != '') {
            $vet .= '&data_entrega_envio=' . urlencode($this->getDataEntregaEnvio());
        }

        if ($this->getDataPrevisaoEnvio() != '') {
            $vet .= '&data_previsao_envio=' . urlencode($this->getDataPrevisaoEnvio());
        }

        if ($this->getRastreamentoEnvio() != '') {
            $vet .= '&rastreamento_envio=' . urlencode($this->getRastreamentoEnvio());
        }

        if ($this->getTituloEnvio() != '') {
            $vet .= '&titulo_envio=' . urlencode($this->getTituloEnvio());
        }

        if ($this->getValorVendaEnvio() != '') {
            $vet .= '&valor_venda_envio=' . urlencode($this->getValorVendaEnvio());
        }

        return !empty($vet) ? $vet : '';
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
    public function getIdEnvioStatus()
    {
        return $this->id_envio_status;
    }

    /**
     * @param mixed $id_envio_status
     */
    public function setIdEnvioStatus($id_envio_status): void
    {
        $this->id_envio_status = $id_envio_status;
    }

    /**
     * @return mixed
     */
    public function getDataCadEnvio()
    {
        return $this->data_cad_envio;
    }

    /**
     * @param mixed $data_cad_envio
     */
    public function setDataCadEnvio($data_cad_envio): void
    {
        $this->data_cad_envio = $data_cad_envio;
    }

    /**
     * @return mixed
     */
    public function getDataEnvioEnvio()
    {
        return $this->data_envio_envio;
    }

    /**
     * @param mixed $data_envio_envio
     */
    public function setDataEnvioEnvio($data_envio_envio): void
    {
        $this->data_envio_envio = $data_envio_envio;
    }

    /**
     * @return mixed
     */
    public function getDataEntregaEnvio()
    {
        return $this->data_entrega_envio;
    }

    /**
     * @param mixed $data_entrega_envio
     */
    public function setDataEntregaEnvio($data_entrega_envio): void
    {
        $this->data_entrega_envio = $data_entrega_envio;
    }

    /**
     * @return mixed
     */
    public function getDataPrevisaoEnvio()
    {
        return $this->data_previsao_envio;
    }

    /**
     * @param mixed $data_previsao_envio
     */
    public function setDataPrevisaoEnvio($data_previsao_envio): void
    {
        $this->data_previsao_envio = $data_previsao_envio;
    }

    /**
     * @return mixed
     */
    public function getRastreamentoEnvio()
    {
        return $this->rastreamento_envio;
    }

    /**
     * @param mixed $rastreamento_envio
     */
    public function setRastreamentoEnvio($rastreamento_envio): void
    {
        $this->rastreamento_envio = $rastreamento_envio;
    }

    /**
     * @return mixed
     */
    public function getTituloEnvio()
    {
        return $this->titulo_envio;
    }

    /**
     * @param mixed $titulo_envio
     */
    public function setTituloEnvio($titulo_envio): void
    {
        $this->titulo_envio = $titulo_envio;
    }

    /**
     * @return mixed
     */
    public function getValorVendaEnvio()
    {
        return $this->valor_venda_envio;
    }

    /**
     * @param mixed $valor_venda_envio
     */
    public function setValorVendaEnvio($valor_venda_envio): void
    {
        $this->valor_venda_envio = $valor_venda_envio;
    }
}

