<?php

namespace Mahout\ERP;

class IntegracaoEnvioItem extends Core
{
    public $id_integracao_envio_item;
    public $id_integracao;
    public $id_envio_item;
    public $codigo_integracao_envio_item;
    public $data_cad_integracao_envio_item;
    public $data_alt_integracao_envio_item;
    public $data_imp_integracao_envio_item;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_envio_item');
    }

    public function reset(): void
    {
        $this->id_integracao_envio_item = null;
        $this->id_integracao = null;
        $this->id_envio_item = null;
        $this->codigo_integracao_envio_item = null;
        $this->data_cad_integracao_envio_item = null;
        $this->data_alt_integracao_envio_item = null;
        $this->data_imp_integracao_envio_item = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdEnvioItem() != '') {
            $vet .= '&id_envio_item=' . urlencode($this->getIdEnvioItem());
        }

        if ($this->getCodigoIntegracaoEnvioItem() != '') {
            $vet .= '&codigo_integracao_envio_item=' . urlencode($this->getCodigoIntegracaoEnvioItem());
        }

        if ($this->getDataCadIntegracaoEnvioItem() != '') {
            $vet .= '&data_cad_integracao_envio_item=' . urlencode($this->getDataCadIntegracaoEnvioItem());
        }

        if ($this->getDataAltIntegracaoEnvioItem() != '') {
            $vet .= '&data_alt_integracao_envio_item=' . urlencode($this->getDataAltIntegracaoEnvioItem());
        }

        if ($this->getDataImpIntegracaoEnvioItem() != '') {
            $vet .= '&data_imp_integracao_envio_item=' . urlencode($this->getDataImpIntegracaoEnvioItem());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoEnvioItem()
    {
        return $this->id_integracao_envio_item;
    }

    /**
     * @param mixed $id_integracao_envio_item
     */
    public function setIdIntegracaoEnvioItem($id_integracao_envio_item): void
    {
        $this->id_integracao_envio_item = $id_integracao_envio_item;
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
    public function getIdEnvioItem()
    {
        return $this->id_envio_item;
    }

    /**
     * @param mixed $id_envio_item
     */
    public function setIdEnvioItem($id_envio_item): void
    {
        $this->id_envio_item = $id_envio_item;
    }

    /**
     * @return mixed
     */
    public function getCodigoIntegracaoEnvioItem()
    {
        return $this->codigo_integracao_envio_item;
    }

    /**
     * @param mixed $codigo_integracao_envio_item
     */
    public function setCodigoIntegracaoEnvioItem($codigo_integracao_envio_item): void
    {
        $this->codigo_integracao_envio_item = $codigo_integracao_envio_item;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoEnvioItem()
    {
        return $this->data_cad_integracao_envio_item;
    }

    /**
     * @param mixed $data_cad_integracao_envio_item
     */
    public function setDataCadIntegracaoEnvioItem($data_cad_integracao_envio_item): void
    {
        $this->data_cad_integracao_envio_item = $data_cad_integracao_envio_item;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoEnvioItem()
    {
        return $this->data_alt_integracao_envio_item;
    }

    /**
     * @param mixed $data_alt_integracao_envio_item
     */
    public function setDataAltIntegracaoEnvioItem($data_alt_integracao_envio_item): void
    {
        $this->data_alt_integracao_envio_item = $data_alt_integracao_envio_item;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoEnvioItem()
    {
        return $this->data_imp_integracao_envio_item;
    }

    /**
     * @param mixed $data_imp_integracao_envio_item
     */
    public function setDataImpintegracaoEnvioItem($data_imp_integracao_envio_item): void
    {
        $this->data_imp_integracao_envio_item = $data_imp_integracao_envio_item;
    }
}
