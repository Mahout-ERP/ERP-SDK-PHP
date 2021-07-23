<?php

namespace Mahout\ERP;

class Integracao extends Core
{
    public $id_integracao;
    public $id_plataforma;
    public $id_integracao_tipo;
    public $id_empresa;
    public $nome_integracao;
    public $url_integracao;
    public $login_integracao;
    public $senha_integracao;
    public $nome_header_integracao;
    public $driver_db_integracao;
    public $database_db_integracao;
    public $obs_integracao;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao');
    }

    public function reset(): void
    {
        $this->id_integracao = null;
        $this->id_plataforma = null;
        $this->id_integracao_tipo = null;
        $this->id_empresa = null;
        $this->nome_integracao = null;
        $this->url_integracao = null;
        $this->login_integracao = null;
        $this->senha_integracao = null;
        $this->nome_header_integracao = null;
        $this->driver_db_integracao = null;
        $this->database_db_integracao = null;
        $this->obs_integracao = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPlataforma() != '') {
            $vet .= '&id_plataforma=' . urlencode($this->getIdPlataforma());
        }

        if ($this->getIdIntegracaoTipo() != '') {
            $vet .= '&id_integracao_tipo=' . urlencode($this->getIdIntegracaoTipo());
        }

        if ($this->getIdEmpresa() != '') {
            $vet .= '&id_empresa=' . urlencode($this->getIdEmpresa());
        }

        if ($this->getNomeIntegracao() != '') {
            $vet .= '&nome_integracao=' . urlencode($this->getNomeIntegracao());
        }

        if ($this->getUrlIntegracao() != '') {
            $vet .= '&url_integracao=' . urlencode($this->getUrlIntegracao());
        }

        if ($this->getLoginIntegracao() != '') {
            $vet .= '&login_integracao=' . urlencode($this->getLoginIntegracao());
        }

        if ($this->getSenhaIntegracao() != '') {
            $vet .= '&senha_integracao=' . urlencode($this->getSenhaIntegracao());
        }

        if ($this->getNomeHeaderIntegracao() != '') {
            $vet .= '&nome_header_integracao=' . urlencode($this->getNomeHeaderIntegracao());
        }

        if ($this->getDriverDbIntegracao() != '') {
            $vet .= '&driver_db_integracao=' . urlencode($this->getDriverDbIntegracao());
        }

        if ($this->getDatabaseDbIntegracao() != '') {
            $vet .= '&database_db_integracao=' . urlencode($this->getDatabaseDbIntegracao());
        }

        if ($this->getObsIntegracao() != '') {
            $vet .= '&obs_integracao=' . urlencode($this->getObsIntegracao());
        }

        return !empty($vet) ? $vet : '';
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
    public function getIdPlataforma()
    {
        return $this->id_plataforma;
    }

    /**
     * @param mixed $id_plataforma
     */
    public function setIdPlataforma($id_plataforma): void
    {
        $this->id_plataforma = $id_plataforma;
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoTipo()
    {
        return $this->id_integracao_tipo;
    }

    /**
     * @param mixed $id_integracao_tipo
     */
    public function setIdIntegracaoTipo($id_integracao_tipo): void
    {
        $this->id_integracao_tipo = $id_integracao_tipo;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * @param mixed $id_empresa
     */
    public function setIdEmpresa($id_empresa): void
    {
        $this->id_empresa = $id_empresa;
    }

    /**
     * @return mixed
     */
    public function getNomeIntegracao()
    {
        return $this->nome_integracao;
    }

    /**
     * @param mixed $nome_integracao
     */
    public function setNomeIntegracao($nome_integracao): void
    {
        $this->nome_integracao = $nome_integracao;
    }

    /**
     * @return mixed
     */
    public function getUrlIntegracao()
    {
        return $this->url_integracao;
    }

    /**
     * @param mixed $url_integracao
     */
    public function setUrlIntegracao($url_integracao): void
    {
        $this->url_integracao = $url_integracao;
    }

    /**
     * @return mixed
     */
    public function getLoginIntegracao()
    {
        return $this->login_integracao;
    }

    /**
     * @param mixed $login_integracao
     */
    public function setLoginIntegracao($login_integracao): void
    {
        $this->login_integracao = $login_integracao;
    }

    /**
     * @return mixed
     */
    public function getSenhaIntegracao()
    {
        return $this->senha_integracao;
    }

    /**
     * @param mixed $senha_integracao
     */
    public function setSenhaIntegracao($senha_integracao): void
    {
        $this->senha_integracao = $senha_integracao;
    }

    /**
     * @return mixed
     */
    public function getNomeHeaderIntegracao()
    {
        return $this->nome_header_integracao;
    }

    /**
     * @param mixed $nome_header_integracao
     */
    public function setNomeHeaderIntegracao($nome_header_integracao): void
    {
        $this->nome_header_integracao = $nome_header_integracao;
    }

    /**
     * @return mixed
     */
    public function getDriverDbIntegracao()
    {
        return $this->driver_db_integracao;
    }

    /**
     * @param mixed $driver_db_integracao
     */
    public function setDriverDbIntegracao($driver_db_integracao): void
    {
        $this->driver_db_integracao = $driver_db_integracao;
    }

    /**
     * @return mixed
     */
    public function getDatabaseDbIntegracao()
    {
        return $this->database_db_integracao;
    }

    /**
     * @param mixed $database_db_integracao
     */
    public function setDatabaseDbIntegracao($database_db_integracao): void
    {
        $this->database_db_integracao = $database_db_integracao;
    }

    /**
     * @return mixed
     */
    public function getObsIntegracao()
    {
        return $this->obs_integracao;
    }

    /**
     * @param mixed $obs_integracao
     */
    public function setObsIntegracao($obs_integracao): void
    {
        $this->obs_integracao = $obs_integracao;
    }
}