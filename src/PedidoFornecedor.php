<?php

namespace Mahout\ERP;

class PedidoFornecedor extends Core
{
    public $id_pedido_fornecedor;
    public $id_pedido;
    public $id_fornecedor;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pedido_fornecedor');
    }

    public function reset(): void
    {
        $this->id_pedido_fornecedor = null;
        $this->id_pedido = null;
        $this->id_fornecedor = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPedido() != '') {
            $vet .= '&id_pedido=' . urlencode($this->getIdPedido());
        }

        if ($this->getIdFornecedor() != '') {
            $vet .= '&id_fornecedor=' . urlencode($this->getIdFornecedor());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdPedidoFornecedor()
    {
        return $this->id_pedido_fornecedor;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedidoFornecedor($id_pedido_fornecedor): void
    {
        $this->id_pedido_fornecedor = $id_pedido_fornecedor;
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
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }

    /**
     * @param mixed $id_fornecedor
     */
    public function setIdFornecedor($id_fornecedor): void
    {
        $this->id_fornecedor = $id_fornecedor;
    }
}
