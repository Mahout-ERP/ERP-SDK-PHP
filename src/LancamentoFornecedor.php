<?php


namespace Mahout\ERP;


class LancamentoFornecedor extends Core
{
    public $id_lancamento_fornecedor;
    public $id_lancamento;
    public $id_fornecedor;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_fornecedor');
    }

    public function reset(): void
    {
        $this->id_lancamento_fornecedor = null;
        $this->id_lancamento = null;
        $this->id_fornecedor = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdFornecedor() != '') {
            $vet .= '&id_fornecedor=' . urlencode($this->getIdFornecedor());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoFornecedor()
    {
        return $this->id_lancamento_fornecedor;
    }

    /**
     * @param mixed $id_lancamento_fornecedor
     */
    public function setIdLancamentoFornecedor($id_lancamento_fornecedor): void
    {
        $this->id_lancamento_fornecedor = $id_lancamento_fornecedor;
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