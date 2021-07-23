<?php

namespace Mahout\ERP;

class EnvioStatus extends Core
{
    public $id_envio_status;
    public $nome_envio_status;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio_status');
    }

    public function reset(): void
    {
        $this->id_envio_status = null;
        $this->nome_envio_status = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getNomeEnvioStatus() != '') {
            $vet .= '&nome_envio_status=' . urlencode($this->getNomeEnvioStatus());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdEnvioStatus()
    {
        return $this->id_envio_status;
    }

    /**
     * @param mixed $id_envio_status
     */
    public function setIdEnvioStatus($id_envio_status): void
    {
        $this->id_envio_status = $id_envio_status;
    }

    /**
     * @return mixed
     */
    public function getNomeEnvioStatus()
    {
        return $this->nome_envio_status;
    }

    /**
     * @param mixed $nome_envio_status
     */
    public function setNomeEnvioStatus($nome_envio_status): void
    {
        $this->nome_envio_status = $nome_envio_status;
    }
}

