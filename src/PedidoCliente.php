<?php

namespace Mahout\ERP;

class PedidoCliente extends Core
{
    public $id_pedido_cliente;
    public $id_pedido;
    public $id_cliente;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pedido_cliente');
    }

    public function reset(): void
    {
        $this->id_pedido_cliente = null;
        $this->id_pedido = null;
        $this->id_cliente = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPedido() != '') {
            $vet .= '&id_pedido=' . urlencode($this->getIdPedido());
        }

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdPedidoCliente()
    {
        return $this->id_pedido_cliente;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedidoCliente($id_pedido_cliente): void
    {
        $this->id_pedido_cliente = $id_pedido_cliente;
    }

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedido($id_pedido): void
    {
        $this->id_pedido = $id_pedido;
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
