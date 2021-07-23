<?php

namespace Mahout\ERP;

class EnderecoUsuario extends Core
{
    public $id_usuario_endereco;
    public $id_usuario;
    public $id_endereco;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('endereco_usuario');
    }

    public function reset(): void
    {
        $this->id_usuario_endereco = null;
        $this->id_usuario = null;
        $this->id_endereco = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getIdEndereco() != '') {
            $vet .= '&id_endereco=' . urlencode($this->getIdEndereco());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioEndereco()
    {
        return $this->id_usuario_endereco;
    }

    /**
     * @param mixed $id_usuario_endereco
     */
    public function setIdUsuarioEndereco($id_usuario_endereco): void
    {
        $this->id_usuario_endereco = $id_usuario_endereco;
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
    public function getIdEndereco()
    {
        return $this->id_endereco;
    }

    /**
     * @param mixed $id_endereco
     */
    public function setIdEndereco($id_endereco): void
    {
        $this->id_endereco = $id_endereco;
    }
}