<?php

namespace Mahout\ERP;

class PedidoItem extends Core
{
    public $id_pedido_item;
    public $id_pedido;
    public $id_produto;
    public $id_usuario;
    public $ordem_pedido_item;
    public $qtd_pedido_item;
    public $valor_pedido_item;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pedido_item');
    }

    public function reset(): void
    {
        $this->id_pedido_item = null;
        $this->id_pedido = null;
        $this->id_produto = null;
        $this->id_usuario = null;
        $this->ordem_pedido_item = null;
        $this->qtd_pedido_item = null;
        $this->valor_pedido_item = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPedido() != '') {
            $vet .= '&id_pedido=' . urlencode($this->getIdPedido());
        }

        if ($this->getIdProduto() != '') {
            $vet .= '&id_produto=' . urlencode($this->getIdProduto());
        }

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getOrdemPedidoItem() != '') {
            $vet .= '&ordem_pedido_item=' . urlencode($this->getOrdemPedidoItem());
        }

        if ($this->getQtdPedidoItem() != '') {
            $vet .= '&qtd_pedido_item=' . urlencode($this->getQtdPedidoItem());
        }

        if ($this->getValorPedidoItem() != '') {
            $vet .= '&qtd_pedido_item=' . urlencode($this->getValorPedidoItem());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdPedidoItem()
    {
        return $this->id_pedido_item;
    }

    /**
     * @param mixed $id_pedido_item
     */
    public function setIdPedidoItem($id_pedido_item): void
    {
        $this->id_pedido_item = $id_pedido_item;
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
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto): void
    {
        $this->id_produto = $id_produto;
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
    public function getOrdemPedidoItem()
    {
        return $this->ordem_pedido_item;
    }

    /**
     * @param mixed $ordem_pedido_item
     */
    public function setOrdemPedidoItem($ordem_pedido_item): void
    {
        $this->ordem_pedido_item = $ordem_pedido_item;
    }

    /**
     * @return mixed
     */
    public function getQtdPedidoItem()
    {
        return $this->qtd_pedido_item;
    }

    /**
     * @param mixed $qtd_pedido_item
     */
    public function setQtdPedidoItem($qtd_pedido_item): void
    {
        $this->qtd_pedido_item = $qtd_pedido_item;
    }

    /**
     * @return mixed
     */
    public function getValorPedidoItem()
    {
        return $this->valor_pedido_item;
    }

    /**
     * @param mixed $valor_pedido_item
     */
    public function setValorPedidoItem($valor_pedido_item): void
    {
        $this->valor_pedido_item = $valor_pedido_item;
    }
}
