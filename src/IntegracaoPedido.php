<?php

namespace Mahout\ERP;

class IntegracaoPedido extends Core
{
    public $id_integracao_pedido;
    public $id_integracao;
    public $id_pedido;
    public $codigo_integracao_pedido;
    public $data_cad_integracao_pedido;
    public $data_alt_integracao_pedido;
    public $data_imp_integracao_pedido;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_pedido');
    }

    public function reset(): void
    {
        $this->id_integracao_pedido = null;
        $this->id_integracao = null;
        $this->id_pedido = null;
        $this->codigo_integracao_pedido = null;
        $this->data_cad_integracao_pedido = null;
        $this->data_alt_integracao_pedido = null;
        $this->data_imp_integracao_pedido = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdPedido() != '') {
            $vet .= '&id_pedido=' . urlencode($this->getIdPedido());
        }

        if ($this->getCodigoIntegracaoPedido() != '') {
            $vet .= '&codigo_integracao_pedido=' . urlencode($this->getCodigoIntegracaoPedido());
        }

        if ($this->getDataCadIntegracaoPedido() != '') {
            $vet .= '&data_cad_integracao_pedido=' . urlencode($this->getDataCadIntegracaoPedido());
        }

        if ($this->getDataAltIntegracaoPedido() != '') {
            $vet .= '&data_alt_integracao_pedido=' . urlencode($this->getDataAltIntegracaoPedido());
        }

        if ($this->getDataImpIntegracaoPedido() != '') {
            $vet .= '&data_imp_integracao_pedido=' . urlencode($this->getDataImpIntegracaoPedido());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoPedido()
    {
        return $this->id_integracao_pedido;
    }

    /**
     * @param mixed $id_integracao_pedido
     */
    public function setIdIntegracaoPedido($id_integracao_pedido): void
    {
        $this->id_integracao_pedido = $id_integracao_pedido;
    }

    /**
     * @return mixed
     */
    public function getIdIntegracao()
    {
        return $this->id_integracao;
    }

    /**
     * @param mixed $id_integracao
     */
    public function setIdIntegracao($id_integracao): void
    {
        $this->id_integracao = $id_integracao;
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
    public function getCodigoIntegracaoPedido()
    {
        return $this->codigo_integracao_pedido;
    }

    /**
     * @param mixed $codigo_integracao_pedido
     */
    public function setCodigoIntegracaoPedido($codigo_integracao_pedido): void
    {
        $this->codigo_integracao_pedido = $codigo_integracao_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoPedido()
    {
        return $this->data_cad_integracao_pedido;
    }

    /**
     * @param mixed $data_cad_integracao_pedido
     */
    public function setDataCadIntegracaoPedido($data_cad_integracao_pedido): void
    {
        $this->data_cad_integracao_pedido = $data_cad_integracao_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoPedido()
    {
        return $this->data_alt_integracao_pedido;
    }

    /**
     * @param mixed $data_alt_integracao_pedido
     */
    public function setDataAltIntegracaoPedido($data_alt_integracao_pedido): void
    {
        $this->data_alt_integracao_pedido = $data_alt_integracao_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoPedido()
    {
        return $this->data_imp_integracao_pedido;
    }

    /**
     * @param mixed $data_imp_integracao_pedido
     */
    public function setDataImpIntegracaoPedido($data_imp_integracao_pedido): void
    {
        $this->data_imp_integracao_pedido = $data_imp_integracao_pedido;
    }
}
