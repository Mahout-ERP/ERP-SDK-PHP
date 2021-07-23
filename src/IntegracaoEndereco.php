<?php

namespace Mahout\ERP;

class IntegracaoEndereco extends Core
{
    public $id_integracao_endereco;
    public $id_integracao;
    public $id_endereco;
    public $codigo_integracao_endereco;
    public $data_cad_integracao_endereco;
    public $data_alt_integracao_endereco;
    public $data_imp_integracao_endereco;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_endereco');
    }

    public function reset(): void
    {
        $this->id_integracao_endereco = null;
        $this->id_integracao = null;
        $this->id_endereco = null;
        $this->codigo_integracao_endereco = null;
        $this->data_cad_integracao_endereco = null;
        $this->data_alt_integracao_endereco = null;
        $this->data_imp_integracao_endereco = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdEndereco() != '') {
            $vet .= '&id_endereco=' . urlencode($this->getIdEndereco());
        }

        if ($this->getCodigoIntegracaoEndereco() != '') {
            $vet .= '&codigo_integracao_endereco=' . urlencode($this->getCodigoIntegracaoEndereco());
        }

        if ($this->getDataCadIntegracaoEndereco() != '') {
            $vet .= '&data_cad_integracao_endereco=' . urlencode($this->getDataCadIntegracaoEndereco());
        }

        if ($this->getDataAltIntegracaoEndereco() != '') {
            $vet .= '&data_alt_integracao_endereco=' . urlencode($this->getDataAltIntegracaoEndereco());
        }

        if ($this->getDataImpIntegracaoEndereco() != '') {
            $vet .= '&data_imp_integracao_endereco=' . urlencode($this->getDataImpIntegracaoEndereco());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoEndereco()
    {
        return $this->id_integracao_endereco;
    }

    /**
     * @param mixed $id_integracao_endereco
     */
    public function setIdIntegracaoEndereco($id_integracao_endereco): void
    {
        $this->id_integracao_endereco = $id_integracao_endereco;
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
    public function getIdEndereco()
    {
        return $this->id_endereco;
    }

    /**
     * @param mixed $id_endereco
     */
    public function setIdEndereco($id_endereco): void
    {
        $this->id_endereco = $id_endereco;
    }

    /**
     * @return mixed
     */
    public function getCodigoIntegracaoEndereco()
    {
        return $this->codigo_integracao_endereco;
    }

    /**
     * @param mixed $codigo_integracao_endereco
     */
    public function setCodigoIntegracaoEndereco($codigo_integracao_endereco): void
    {
        $this->codigo_integracao_endereco = $codigo_integracao_endereco;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoEndereco()
    {
        return $this->data_cad_integracao_endereco;
    }

    /**
     * @param mixed $data_cad_integracao_endereco
     */
    public function setDataCadIntegracaoEndereco($data_cad_integracao_endereco): void
    {
        $this->data_cad_integracao_endereco = $data_cad_integracao_endereco;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoEndereco()
    {
        return $this->data_alt_integracao_endereco;
    }

    /**
     * @param mixed $data_alt_integracao_endereco
     */
    public function setDataAltIntegracaoEndereco($data_alt_integracao_endereco): void
    {
        $this->data_alt_integracao_endereco = $data_alt_integracao_endereco;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoEndereco()
    {
        return $this->data_imp_integracao_endereco;
    }

    /**
     * @param mixed $data_imp_integracao_endereco
     */
    public function setDataImpIntegracaoEndereco($data_imp_integracao_endereco): void
    {
        $this->data_imp_integracao_endereco = $data_imp_integracao_endereco;
    }
}