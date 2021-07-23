<?php

namespace Mahout\ERP;

class UsuarioContato extends Core
{
    public $id_usuario_contato;
    public $id_usuario;
    public $id_contato;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('usuario_contato');
    }

    public function reset(): void
    {
        $this->id_usuario_contato = null;
        $this->id_usuario = null;
        $this->id_contato = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getIdContato() != '') {
            $vet .= '&id_contato=' . urlencode($this->getIdContato());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioContato()
    {
        return $this->id_usuario_contato;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuarioContato($id_usuario_contato): void
    {
        $this->id_usuario_contato = $id_usuario_contato;
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
    public function getIdContato()
    {
        return $this->id_contato;
    }

    /**
     * @param mixed $id_contato
     */
    public function setIdContato($id_contato): void
    {
        $this->id_contato = $id_contato;
    }
}
