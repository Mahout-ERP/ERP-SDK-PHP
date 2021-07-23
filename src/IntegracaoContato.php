<?php

namespace Mahout\ERP;

class IntegracaoContato extends Core
{
    public $id_integracao_contato;
    public $id_integracao;
    public $id_contato;
    public $codigo_integracao_contato;
    public $data_cad_integracao_contato;
    public $data_alt_integracao_contato;
    public $data_imp_integracao_contato;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_contato');
    }

    public function reset(): void
    {
        $this->id_integracao_contato = null;
        $this->id_integracao = null;
        $this->id_contato = null;
        $this->codigo_integracao_contato = null;
        $this->data_cad_integracao_contato = null;
        $this->data_alt_integracao_contato = null;
        $this->data_imp_integracao_contato = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdContato() != '') {
            $vet .= '&id_contato=' . urlencode($this->getIdContato());
        }

        if ($this->getCodigoIntegracaoContato() != '') {
            $vet .= '&codigo_integracao_contato=' . urlencode($this->getCodigoIntegracaoContato());
        }

        if ($this->getDataCadIntegracaoContato() != '') {
            $vet .= '&data_cad_integracao_contato=' . urlencode($this->getDataCadIntegracaoContato());
        }

        if ($this->getDataAltIntegracaoContato() != '') {
            $vet .= '&data_alt_integracao_contato=' . urlencode($this->getDataAltIntegracaoContato());
        }

        if ($this->getDataImpIntegracaoContato() != '') {
            $vet .= '&data_imp_integracao_contato=' . urlencode($this->getDataImpIntegracaoContato());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoContato()
    {
        return $this->id_integracao_contato;
    }

    /**
     * @param mixed $id_integracao_contato
     */
    public function setIdIntegracaoContato($id_integracao_contato): void
    {
        $this->id_integracao_contato = $id_integracao_contato;
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
    public function getIdContato()
    {
        return $this->id_contato;
    }

    /**
     * @param mixed $id_contato
     */
    public function setIdContato($id_contato): void
    {
        $this->id_contato = $id_contato;
    }

    /**
     * @return mixed
     */
    public function getCodigoIntegracaoContato()
    {
        return $this->codigo_integracao_contato;
    }

    /**
     * @param mixed $codigo_integracao_contato
     */
    public function setCodigoIntegracaoContato($codigo_integracao_contato): void
    {
        $this->codigo_integracao_contato = $codigo_integracao_contato;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoContato()
    {
        return $this->data_cad_integracao_contato;
    }

    /**
     * @param mixed $data_cad_integracao_contato
     */
    public function setDataCadIntegracaoContato($data_cad_integracao_contato): void
    {
        $this->data_cad_integracao_contato = $data_cad_integracao_contato;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoContato()
    {
        return $this->data_alt_integracao_contato;
    }

    /**
     * @param mixed $data_alt_integracao_contato
     */
    public function setDataAltIntegracaoContato($data_alt_integracao_contato): void
    {
        $this->data_alt_integracao_contato = $data_alt_integracao_contato;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoContato()
    {
        return $this->data_imp_integracao_contato;
    }

    /**
     * @param mixed $data_imp_integracao_contato
     */
    public function setDataImpIntegracaoContato($data_imp_integracao_contato): void
    {
        $this->data_imp_integracao_contato = $data_imp_integracao_contato;
    }
}