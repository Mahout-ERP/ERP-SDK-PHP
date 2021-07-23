<?php

namespace Mahout\ERP;

class LancamentoTipo extends Core
{
    public $id_lancamento_tipo;
    public $desc_lancamento_tipo;
    public $id_lancamento_tipo_status;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_tipo');
    }

    public function reset(): void
    {
        $this->id_lancamento_tipo = null;
        $this->desc_lancamento_tipo = null;
        $this->id_lancamento_tipo_status = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamentoTipo() != '') {
            $vet .= '&id_lancamento_tipo=' . urlencode($this->getIdLancamentoTipo());
        }

        if ($this->getDescLancamentoTipo() != '') {
            $vet .= '&desc_lancamento_tipo=' . urlencode($this->getDescLancamentoTipo());
        }

        if ($this->getIdLancamentoTipoStatus() != '') {
            $vet .= '&id_lancamento_tipo_status=' . urlencode($this->getIdLancamentoTipoStatus());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoTipo()
    {
        return $this->id_lancamento_tipo;
    }

    /**
     * @param mixed $id_lancamento_tipo
     */
    public function setIdLancamentoTipo($id_lancamento_tipo): void
    {
        $this->id_lancamento_tipo = $id_lancamento_tipo;
    }

    /**
     * @return mixed
     */
    public function getDescLancamentoTipo()
    {
        return $this->desc_lancamento_tipo;
    }

    /**
     * @param mixed $desc_lancamento_tipo
     */
    public function setDescLancamentoTipo($desc_lancamento_tipo): void
    {
        $this->desc_lancamento_tipo = $desc_lancamento_tipo;
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoTipoStatus()
    {
        return $this->id_lancamento_tipo_status;
    }

    /**
     * @param mixed $id_lancamento_tipo_status
     */
    public function setIdLancamentoTipoStatus($id_lancamento_tipo_status): void
    {
        $this->id_lancamento_tipo_status = $id_lancamento_tipo_status;
    }
}