<?php

namespace Mahout\ERP;

class IntegracaoAtributo extends Core
{
    public $id_integracao_atributo;
    public $id_integracao;
    public $id_atributo;
    public $codigo_integracao_atributo;
    public $data_cad_integracao_atributo;
    public $data_alt_integracao_atributo;
    public $data_imp_integracao_atributo;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_atributo');
    }

    public function reset(): void
    {
        $this->id_integracao_atributo = null;
        $this->id_integracao = null;
        $this->id_atributo = null;
        $this->codigo_integracao_atributo = null;
        $this->data_cad_integracao_atributo = null;
        $this->data_alt_integracao_atributo = null;
        $this->data_imp_integracao_atributo = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdAtributo() != '') {
            $vet .= '&id_atributo=' . urlencode($this->getIdAtributo());
        }

        if ($this->getCodigoIntegracaoAtributo() != '') {
            $vet .= '&codigo_integracao_atributo=' . urlencode($this->getCodigoIntegracaoAtributo());
        }

        if ($this->getDataCadIntegracaoAtributo() != '') {
            $vet .= '&data_cad_integracao_atributo=' . urlencode($this->getDataCadIntegracaoAtributo());
        }

        if ($this->getDataAltIntegracaoAtributo() != '') {
            $vet .= '&data_alt_integracao_atributo=' . urlencode($this->getDataAltIntegracaoAtributo());
        }

        if ($this->getDataImpIntegracaoAtributo() != '') {
            $vet .= '&data_imp_integracao_atributo=' . urlencode($this->getDataImpIntegracaoAtributo());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoAtributo()
    {
        return $this->id_integracao_atributo;
    }

    /**
     * @param mixed $id_integracao_atributo
     */
    public function setIdIntegracaoAtributo($id_integracao_atributo): void
    {
        $this->id_integracao_atributo = $id_integracao_atributo;
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
    public function getIdAtributo()
    {
        return $this->id_atributo;
    }

    /**
     * @param mixed $id_atributo
     */
    public function setIdAtributo($id_atributo): void
    {
        $this->id_atributo = $id_atributo;
    }

    /**
     * @return mixed
     */
    public function getCodigoIntegracaoAtributo()
    {
        return $this->codigo_integracao_atributo;
    }

    /**
     * @param mixed $codigo_integracao_atributo
     */
    public function setCodigoIntegracaoAtributo($codigo_integracao_atributo): void
    {
        $this->codigo_integracao_atributo = $codigo_integracao_atributo;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoAtributo()
    {
        return $this->data_cad_integracao_atributo;
    }

    /**
     * @param mixed $data_cad_integracao_atributo
     */
    public function setDataCadIntegracaoAtributo($data_cad_integracao_atributo): void
    {
        $this->data_cad_integracao_atributo = $data_cad_integracao_atributo;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoAtributo()
    {
        return $this->data_alt_integracao_atributo;
    }

    /**
     * @param mixed $data_alt_integracao_atributo
     */
    public function setDataAltIntegracaoAtributo($data_alt_integracao_atributo): void
    {
        $this->data_alt_integracao_atributo = $data_alt_integracao_atributo;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoAtributo()
    {
        return $this->data_imp_integracao_atributo;
    }

    /**
     * @param mixed $data_imp_integracao_atributo
     */
    public function setDataImpIntegracaoAtributo($data_imp_integracao_atributo): void
    {
        $this->data_imp_integracao_atributo = $data_imp_integracao_atributo;
    }
}
