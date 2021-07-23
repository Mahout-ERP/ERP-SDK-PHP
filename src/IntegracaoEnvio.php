<?php

namespace Mahout\ERP;

class IntegracaoEnvio extends Core
{
    public $id_integracao_envio;
    public $id_integracao;
    public $id_envio;
    public $codigo_integracao_envio;
    public $data_cad_integracao_envio;
    public $data_alt_integracao_envio;
    public $data_imp_integracao_envio;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_envio');
    }

    public function reset(): void
    {
        $this->id_integracao_envio = null;
        $this->id_integracao = null;
        $this->id_envio = null;
        $this->codigo_integracao_envio = null;
        $this->data_cad_integracao_envio = null;
        $this->data_alt_integracao_envio = null;
        $this->data_imp_integracao_envio = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdEnvio() != '') {
            $vet .= '&id_envio=' . urlencode($this->getIdEnvio());
        }

        if ($this->getCodigoIntegracaoEnvio() != '') {
            $vet .= '&codigo_integracao_envio=' . urlencode($this->getCodigoIntegracaoEnvio());
        }

        if ($this->getDataCadIntegracaoEnvio() != '') {
            $vet .= '&data_cad_integracao_envio=' . urlencode($this->getDataCadIntegracaoEnvio());
        }

        if ($this->getDataAltIntegracaoEnvio() != '') {
            $vet .= '&data_alt_integracao_envio=' . urlencode($this->getDataAltIntegracaoEnvio());
        }

        if ($this->getDataImpIntegracaoEnvio() != '') {
            $vet .= '&data_imp_integracao_envio=' . urlencode($this->getDataImpIntegracaoEnvio());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoEnvio()
    {
        return $this->id_integracao_envio;
    }

    /**
     * @param mixed $id_integracao_envio
     */
    public function setIdIntegracaoEnvio($id_integracao_envio): void
    {
        $this->id_integracao_envio = $id_integracao_envio;
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
    public function getIdEnvio()
    {
        return $this->id_envio;
    }

    /**
     * @param mixed $id_envio
     */
    public function setIdEnvio($id_envio): void
    {
        $this->id_envio = $id_envio;
    }

    /**
     * @return mixed
     */
    public function getCodigoIntegracaoEnvio()
    {
        return $this->codigo_integracao_envio;
    }

    /**
     * @param mixed $codigo_integracao_envio
     */
    public function setCodigoIntegracaoEnvio($codigo_integracao_envio): void
    {
        $this->codigo_integracao_envio = $codigo_integracao_envio;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoEnvio()
    {
        return $this->data_cad_integracao_envio;
    }

    /**
     * @param mixed $data_cad_integracao_envio
     */
    public function setDataCadIntegracaoEnvio($data_cad_integracao_envio): void
    {
        $this->data_cad_integracao_envio = $data_cad_integracao_envio;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoEnvio()
    {
        return $this->data_alt_integracao_envio;
    }

    /**
     * @param mixed $data_alt_integracao_envio
     */
    public function setDataAltIntegracaoEnvio($data_alt_integracao_envio): void
    {
        $this->data_alt_integracao_envio = $data_alt_integracao_envio;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoEnvio()
    {
        return $this->data_imp_integracao_envio;
    }

    /**
     * @param mixed $data_imp_integracao_envio
     */
    public function setDataImpIntegracaoEnvio($data_imp_integracao_envio): void
    {
        $this->data_imp_integracao_envio = $data_imp_integracao_envio;
    }
}
