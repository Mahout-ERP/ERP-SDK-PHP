<?php

namespace Mahout\ERP;

class EnvioPessoa extends Core
{
    public $id_envio_pessoa;
    public $id_envio;
    public $id_pessoa;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio_pessoa');
    }

    public function reset(): void
    {
        $this->id_envio_pessoa = null;
        $this->id_envio = null;
        $this->id_pessoa = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdEnvio() != '') {
            $vet .= '&id_envio=' . urlencode($this->getIdEnvio());
        }

        if ($this->getIdPessoa() != '') {
            $vet .= '&id_pessoa=' . urlencode($this->getIdPessoa());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdEnvioPessoa()
    {
        return $this->id_envio_pessoa;
    }

    /**
     * @param mixed $id_envio_pessoa
     */
    public function setIdEnvioPessoa($id_envio_pessoa): void
    {
        $this->id_envio_pessoa = $id_envio_pessoa;
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
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     */
    public function setIdPessoa($id_pessoa): void
    {
        $this->id_pessoa = $id_pessoa;
    }
}
