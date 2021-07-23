<?php

namespace Mahout\ERP;

class UsuarioEmpresa extends Core
{
    public $id_usuario_empresa;
    public $id_usuario;
    public $id_empresa;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('usuario_empresa');
    }

    public function reset(): void
    {
        $this->id_usuario_empresa = null;
        $this->id_usuario = null;
        $this->id_empresa = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getIdEmpresa() != '') {
            $vet .= '&id_empresa=' . urlencode($this->getIdEmpresa());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioEmpresa()
    {
        return $this->id_usuario_empresa;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuarioEmpresa($id_usuario_empresa): void
    {
        $this->id_usuario_empresa = $id_usuario_empresa;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
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
}
