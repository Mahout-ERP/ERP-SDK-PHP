<?php

namespace Mahout\ERP;

class UsuarioCliente extends Core
{
    public $id_usuario_cliente;
    public $id_usuario;
    public $id_cliente;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('usuario_cliente');
    }

    public function reset(): void
    {
        $this->id_usuario_cliente = null;
        $this->id_usuario = null;
        $this->id_cliente = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioCliente()
    {
        return $this->id_usuario_cliente;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuarioCliente($id_usuario_cliente): void
    {
        $this->id_usuario_cliente = $id_usuario_cliente;
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
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente): void
    {
        $this->id_cliente = $id_cliente;
    }
}
