<?php

namespace Mahout\ERP;

class Sessao
{
    public $id_endereco_entrega;
    public $id_endereco_cobranca;
    public $cep_endereco;
    public $cliente;
    public $cliente_contato;
    public $cliente_endereco;
    public $usuario;
    public $pedido;
    public $pedido_item;
    public $lancamento;

    public function __construct()
    {
        $this->load();
    }

    public function save()
    {
        $_SESSION['mahout_commerce'] = [
            'id_endereco_entrega' => $this->getIdEnderecoEntrega(),
            'id_endereco_cobranca' => $this->getIdEnderecoCobranca(),
            'cep_endereco' => $this->getCepEndereco(),
            'cliente' => $this->getCliente(),
            'cliente_contato' => $this->getClienteContato(),
            'cliente_endereco' => $this->getClienteEndereco(),
            'usuario' => $this->getUsuario(),
            'pedido' => $this->getPedido(),
            'pedido_item' => $this->getPedidoItem(),
            'lancamento' => $this->getLancamento(),
        ];
    }

    public function load()
    {
        $this->setIdEnderecoEntrega($_SESSION['mahout_commerce']['id_endereco_entrega'] ?? null);
        $this->setIdEnderecoCobranca($_SESSION['mahout_commerce']['id_endereco_cobranca'] ?? null);
        $this->setCepEndereco($_SESSION['mahout_commerce']['cep_endereco'] ?? null);
        $this->setCliente($_SESSION['mahout_commerce']['cliente'] ?? null);
        $this->setClienteContato($_SESSION['mahout_commerce']['cliente_contato'] ?? null);
        $this->setClienteEndereco($_SESSION['mahout_commerce']['cliente_endereco'] ?? null);
        $this->setUsuario($_SESSION['mahout_commerce']['usuario'] ?? null);
        $this->setPedido($_SESSION['mahout_commerce']['pedido'] ?? null);
        $this->setPedidoItem($_SESSION['mahout_commerce']['pedido_item'] ?? null);
        $this->setLancamento($_SESSION['mahout_commerce']['lancamento'] ?? null);
    }

    public function reset()
    {
        $this->id_endereco_entrega = null;
        $this->id_endereco_cobranca = null;
        $this->cep_endereco = null;
        $this->cliente = null;
        $this->cliente_contato = null;
        $this->cliente_endereco = null;
        $this->usuario = null;
        $this->pedido = null;
        $this->pedido_item = null;
        $this->lancamento = null;

        $this->save();
    }

    /**
     * @return mixed
     */
    public function getSessao()
    {
        return $_SESSION['mahout_commerce'] ?? null;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getClienteContato()
    {
        return $this->cliente_contato;
    }

    /**
     * @param mixed $cliente_contato
     */
    public function setClienteContato($cliente_contato): void
    {
        $this->cliente_contato = $cliente_contato;
    }

    /**
     * @return mixed
     */
    public function getClienteEndereco()
    {
        return $this->cliente_endereco;
    }

    /**
     * @param mixed $cliente_endereco
     */
    public function setClienteEndereco($cliente_endereco): void
    {
        $this->cliente_endereco = $cliente_endereco;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario): void
    {
        $this->usuario = $usuario;
    }

    /**
     * @return mixed
     */
    public function getIdEnderecoEntrega()
    {
        return $this->id_endereco_entrega;
    }

    /**
     * @param mixed $id_endereco_entrega
     */
    public function setIdEnderecoEntrega($id_endereco_entrega): void
    {
        $this->id_endereco_entrega = $id_endereco_entrega;
    }

    /**
     * @return mixed
     */
    public function getIdEnderecoCobranca()
    {
        return $this->id_endereco_cobranca;
    }

    /**
     * @param mixed $id_endereco_cobranca
     */
    public function setIdEnderecoCobranca($id_endereco_cobranca): void
    {
        $this->id_endereco_cobranca = $id_endereco_cobranca;
    }

    /**
     * @return mixed
     */
    public function getCepEndereco()
    {
        return $this->cep_endereco;
    }

    /**
     * @param mixed $cep_endereco
     */
    public function setCepEndereco($cep_endereco): void
    {
        $this->cep_endereco = $cep_endereco;
    }

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param mixed $pedido
     */
    public function setPedido($pedido): void
    {
        $this->pedido = $pedido;
    }

    /**
     * @return mixed
     */
    public function getPedidoItem()
    {
        return $this->pedido_item;
    }

    /**
     * @param mixed $pedido_item
     */
    public function setPedidoItem($pedido_item): void
    {
        $this->pedido_item = $pedido_item;
    }

    /**
     * @return mixed
     */
    public function getLancamento()
    {
        return $this->lancamento;
    }

    /**
     * @param mixed $lancamento
     */
    public function setLancamento($lancamento): void
    {
        $this->lancamento = $lancamento;
    }
}
