<?php

namespace Mahout\ERP;

class EnvioModalidade extends Core
{
    public $id_envio_modalidade;
    public $nome_envio_modalidade;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio_modalidade');
    }

    public function reset(): void
    {
        $this->id_envio_modalidade = null;
        $this->nome_envio_modalidade = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getNomeEnvioModalidade() != '') {
            $vet .= '&nome_envio_modalidade=' . urlencode($this->getNomeEnvioModalidade());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdEnvioModalidade()
    {
        return $this->id_envio_modalidade;
    }

    /**
     * @param mixed $id_envio_modalidade
     */
    public function setIdEnvioModalidade($id_envio_modalidade): void
    {
        $this->id_envio_modalidade = $id_envio_modalidade;
    }

    /**
     * @return mixed
     */
    public function getNomeEnvioModalidade()
    {
        return $this->nome_envio_modalidade;
    }

    /**
     * @param mixed $nome_envio_modalidade
     */
    public function setNomeEnvioModalidade($nome_envio_modalidade): void
    {
        $this->nome_envio_modalidade = $nome_envio_modalidade;
    }
}
