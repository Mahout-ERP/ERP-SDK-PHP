<?php

namespace Mahout\ERP;

class LancamentoPedido extends Core
{
    public $id_lancamento_pedido;
    public $id_lancamento;
    public $id_pedido;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_pedido');
    }

    public function reset(): void
    {
        $this->id_lancamento_pedido = null;
        $this->id_lancamento = null;
        $this->id_pedido = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdPedido() != '') {
            $vet .= '&id_pedido=' . urlencode($this->getIdPedido());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoPedido()
    {
        return $this->id_lancamento_pedido;
    }

    /**
     * @param mixed $id_lancamento_pedido
     */
    public function setIdLancamentoPedido($id_lancamento_pedido): void
    {
        $this->id_lancamento_pedido = $id_lancamento_pedido;
    }

    /**
     * @return mixed
     */
    public function getIdLancamento()
    {
        return $this->id_lancamento;
    }

    /**
     * @param mixed $id_lancamento
     */
    public function setIdLancamento($id_lancamento): void
    {
        $this->id_lancamento = $id_lancamento;
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
}
