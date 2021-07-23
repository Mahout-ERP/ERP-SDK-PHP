<?php

namespace Mahout\ERP;

class EnderecoCliente extends Core
{
    public $id_cliente_endereco;
    public $id_cliente;
    public $id_endereco;
    public $id_endereco_tipo;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('cliente_endereco');
    }

    public function reset(): void
    {
        $this->id_cliente_endereco = null;
        $this->id_cliente = null;
        $this->id_endereco = null;
        $this->id_endereco_tipo = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        if ($this->getIdEndereco() != '') {
            $vet .= '&id_endereco=' . urlencode($this->getIdEndereco());
        }

        if ($this->getIdEnderecoTipo() != '') {
            $vet .= '&id_endereco_tipo=' . urlencode($this->getIdEnderecoTipo());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdClienteEndereco()
    {
        return $this->id_cliente_endereco;
    }

    /**
     * @param mixed $id_cliente_endereco
     */
    public function setIdClienteEndereco($id_cliente_endereco): void
    {
        $this->id_cliente_endereco = $id_cliente_endereco;
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

    /**
     * @return mixed
     */
    public function getIdEnderecoTipo()
    {
        return $this->id_endereco_tipo;
    }

    /**
     * @param mixed $id_endereco
     */
    public function setIdEnderecoTipo($id_endereco_tipo): void
    {
        $this->id_endereco_tipo = $id_endereco_tipo;
    }
}
