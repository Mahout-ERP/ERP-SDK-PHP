<?php

namespace Mahout\ERP;

class ClienteContato extends Core
{
    public $id_cliente_contato;
    public $id_cliente;
    public $id_contato;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('cliente_contato');
    }

    public function reset(): void
    {
        $this->id_cliente_contato = null;
        $this->id_cliente = null;
        $this->id_contato = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        if ($this->getIdContato() != '') {
            $vet .= '&id_contato=' . urlencode($this->getIdContato());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdClienteContato()
    {
        return $this->id_cliente_contato;
    }

    /**
     * @param mixed $id_cliente_contato
     */
    public function setIdClienteContato($id_cliente_contato): void
    {
        $this->id_cliente_contato = $id_cliente_contato;
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
