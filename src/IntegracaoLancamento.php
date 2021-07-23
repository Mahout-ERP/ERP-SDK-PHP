<?php

namespace Mahout\ERP;

class IntegracaoLancamento extends Core
{
    public $id_integracao_lancamento;
    public $id_integracao;
    public $id_lancamento;
    public $codigo_integracao_lancamento;
    public $data_cad_integracao_lancamento;
    public $data_alt_integracao_lancamento;
    public $data_imp_integracao_lancamento;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_lancamento');
    }

    public function reset(): void
    {
        $this->id_integracao_lancamento = null;
        $this->id_integracao = null;
        $this->id_lancamento = null;
        $this->codigo_integracao_lancamento = null;
        $this->data_cad_integracao_lancamento = null;
        $this->data_alt_integracao_lancamento = null;
        $this->data_imp_integracao_lancamento = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getCodigoIntegracaoLancamento() != '') {
            $vet .= '&codigo_integracao_lancamento=' . urlencode($this->getCodigoIntegracaoLancamento());
        }

        if ($this->getDataCadIntegracaoLancamento() != '') {
            $vet .= '&data_cad_integracao_lancamento=' . urlencode($this->getDataCadIntegracaoLancamento());
        }

        if ($this->getDataAltIntegracaoLancamento() != '') {
            $vet .= '&data_alt_integracao_lancamento=' . urlencode($this->getDataAltIntegracaoLancamento());
        }

        if ($this->getDataImpIntegracaoLancamento() != '') {
            $vet .= '&data_imp_integracao_lancamento=' . urlencode($this->getDataImpIntegracaoLancamento());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoLancamento()
    {
        return $this->id_integracao_lancamento;
    }

    /**
     * @param mixed $id_integracao_lancamento
     */
    public function setIdIntegracaoLancamento($id_integracao_lancamento): void
    {
        $this->id_integracao_lancamento = $id_integracao_lancamento;
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
    public function getCodigoIntegracaoLancamento()
    {
        return $this->codigo_integracao_lancamento;
    }

    /**
     * @param mixed $codigo_integracao_lancamento
     */
    public function setCodigoIntegracaoLancamento($codigo_integracao_lancamento): void
    {
        $this->codigo_integracao_lancamento = $codigo_integracao_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoLancamento()
    {
        return $this->data_cad_integracao_lancamento;
    }

    /**
     * @param mixed $data_cad_integracao_lancamento
     */
    public function setDataCadIntegracaoLancamento($data_cad_integracao_lancamento): void
    {
        $this->data_cad_integracao_lancamento = $data_cad_integracao_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoLancamento()
    {
        return $this->data_alt_integracao_lancamento;
    }

    /**
     * @param mixed $data_alt_integracao_lancamento
     */
    public function setDataAltIntegracaoLancamento($data_alt_integracao_lancamento): void
    {
        $this->data_alt_integracao_lancamento = $data_alt_integracao_lancamento;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoLancamento()
    {
        return $this->data_imp_integracao_lancamento;
    }

    /**
     * @param mixed $data_imp_integracao_lancamento
     */
    public function setDataImpIntegracaoLancamento($data_imp_integracao_lancamento): void
    {
        $this->data_imp_integracao_lancamento = $data_imp_integracao_lancamento;
    }
}
