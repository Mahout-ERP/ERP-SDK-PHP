<?php

namespace Mahout\ERP;

class LancamentoCliente extends Core
{
    public $id_lancamento_cliente;
    public $id_lancamento;
    public $id_cliente;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_cliente');
    }

    public function reset(): void
    {
        $this->id_lancamento_cliente = null;
        $this->id_lancamento = null;
        $this->id_cliente = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdCliente() != '') {
            $vet .= '&id_cliente=' . urlencode($this->getIdCliente());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoCliente()
    {
        return $this->id_lancamento_cliente;
    }

    /**
     * @param mixed $id_lancamento_cliente
     */
    public function setIdLancamentoCliente($id_lancamento_cliente): void
    {
        $this->id_lancamento_cliente = $id_lancamento_cliente;
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