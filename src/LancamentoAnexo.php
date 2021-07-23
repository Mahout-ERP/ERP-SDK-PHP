<?php

namespace Mahout\ERP;

class LancamentoAnexo extends Core
{
    public $id_lancamento_anexo;
    public $id_lancamento;
    public $id_anexo;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_anexo');
    }

    public function reset(): void
    {
        $this->id_lancamento_anexo = null;
        $this->id_lancamento = null;
        $this->id_anexo = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdAnexo() != '') {
            $vet .= '&id_anexo=' . urlencode($this->getIdAnexo());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoAnexo()
    {
        return $this->id_lancamento_anexo;
    }

    /**
     * @param mixed $id_lancamento_anexo
     */
    public function setIdLancamentoAnexo($id_lancamento_anexo): void
    {
        $this->id_lancamento_anexo = $id_lancamento_anexo;
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
    public function getIdAnexo()
    {
        return $this->id_anexo;
    }

    /**
     * @param mixed $id_anexo
     */
    public function setIdAnexo($id_anexo): void
    {
        $this->id_anexo = $id_anexo;
    }
}