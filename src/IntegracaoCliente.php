<?php

namespace Mahout\ERP;

class IntegracaoCliente extends Core
{
    public $id_integracao_cliente;
    public $id_integracao;
    public $id_cliente;
    public $codigo_integracao_cliente;
    public $data_cad_integracao_cliente;
    public $data_alt_integracao_cliente;
    public $data_imp_integracao_cliente;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_cliente');
    }

    public function reset(): void
    {
        $this->id_integracao_cliente = null;
        $this->id_integracao = null;
        $this->id_cliente = null;
        $this->codigo_integracao_cliente = null;
        $this->data_cad_integracao_cliente = null;
        $this->data_alt_integracao_cliente = null;
        $this->data_imp_integracao_cliente = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        if ($this->getCodigoIntegracaoCliente() != '') {
            $vet .= '&codigo_integracao_cliente=' . urlencode($this->getCodigoIntegracaoCliente());
        }

        if ($this->getDataCadIntegracaoCliente() != '') {
            $vet .= '&data_cad_integracao_cliente=' . urlencode($this->getDataCadIntegracaoCliente());
        }

        if ($this->getDataAltIntegracaoCliente() != '') {
            $vet .= '&data_alt_integracao_cliente=' . urlencode($this->getDataAltIntegracaoCliente());
        }

        if ($this->getDataImpIntegracaoCliente() != '') {
            $vet .= '&data_imp_integracao_cliente=' . urlencode($this->getDataImpIntegracaoCliente());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoCliente()
    {
        return $this->id_integracao_cliente;
    }

    /**
     * @param mixed $id_integracao_cliente
     */
    public function setIdIntegracaoCliente($id_integracao_cliente): void
    {
        $this->id_integracao_cliente = $id_integracao_cliente;
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
    public function getCodigoIntegracaoCliente()
    {
        return $this->codigo_integracao_cliente;
    }

    /**
     * @param mixed $codigo_integracao_cliente
     */
    public function setCodigoIntegracaoCliente($codigo_integracao_cliente): void
    {
        $this->codigo_integracao_cliente = $codigo_integracao_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoCliente()
    {
        return $this->data_cad_integracao_cliente;
    }

    /**
     * @param mixed $data_cad_integracao_cliente
     */
    public function setDataCadIntegracaoCliente($data_cad_integracao_cliente): void
    {
        $this->data_cad_integracao_cliente = $data_cad_integracao_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoCliente()
    {
        return $this->data_alt_integracao_cliente;
    }

    /**
     * @param mixed $data_alt_integracao_cliente
     */
    public function setDataAltIntegracaoCliente($data_alt_integracao_cliente): void
    {
        $this->data_alt_integracao_cliente = $data_alt_integracao_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoCliente()
    {
        return $this->data_imp_integracao_cliente;
    }

    /**
     * @param mixed $data_imp_integracao_cliente
     */
    public function setDataImpIntegracaoCliente($data_imp_integracao_cliente): void
    {
        $this->data_imp_integracao_cliente = $data_imp_integracao_cliente;
    }
}
