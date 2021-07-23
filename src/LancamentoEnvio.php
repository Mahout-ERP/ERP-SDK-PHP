<?php

namespace Mahout\ERP;

class LancamentoEnvio extends Core
{
    public $id_lancamento_envio;
    public $id_lancamento;
    public $id_envio;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_envio');
    }

    public function reset(): void
    {
        $this->id_lancamento_envio = null;
        $this->id_lancamento = null;
        $this->id_envio = null;
    }

    public function filter(): string
    {
        $vet = '';
        
        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdEnvio() != '') {
            $vet .= '&id_envio=' . urlencode($this->getIdEnvio());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoEnvio()
    {
        return $this->id_lancamento_envio;
    }

    /**
     * @param mixed $id_lancamento_envio
     */
    public function setIdLancamentoEnvio($id_lancamento_envio): void
    {
        $this->id_lancamento_envio = $id_lancamento_envio;
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
}