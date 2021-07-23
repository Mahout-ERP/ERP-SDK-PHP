<?php

namespace Mahout\ERP;

class LancamentoCategoria extends Core
{
    public $id_lancamento_categoria;
    public $id_lancamento_status;
    public $id_lancamento_tipo;
    public $codigo_lancamento_categoria;
    public $nome_lancamento_categoria;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_categoria');
    }

    public function reset(): void
    {
        $this->id_lancamento_categoria = null;
        $this->id_lancamento_status = null;
        $this->id_lancamento_tipo = null;
        $this->codigo_lancamento_categoria = null;
        $this->nome_lancamento_categoria = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamentoStatus() != '') {
            $vet .= '&id_lancamento_status=' . urlencode($this->getIdLancamentoStatus());
        }

        if ($this->getIdLancamentoTipo() != '') {
            $vet .= '&id_lancamento_tipo=' . urlencode($this->getIdLancamentoTipo());
        }

        if ($this->getCodigoLancamentoCategoria() != '') {
            $vet .= '&codigo_lancamento_categoria=' . urlencode($this->getCodigoLancamentoCategoria());
        }

        if ($this->getNomeLancamentoCategoria() != '') {
            $vet .= '&nome_lancamento_categoria=' . urlencode($this->getNomeLancamentoCategoria());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoCategoria()
    {
        return $this->id_lancamento_categoria;
    }

    /**
     * @param mixed $id_lancamento_categoria
     */
    public function setIdLancamentoCategoria($id_lancamento_categoria): void
    {
        $this->id_lancamento_categoria = $id_lancamento_categoria;
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoStatus()
    {
        return $this->id_lancamento_status;
    }

    /**
     * @param mixed $id_lancamento_status
     */
    public function setIdLancamentoStatus($id_lancamento_status): void
    {
        $this->id_lancamento_status = $id_lancamento_status;
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoTipo()
    {
        return $this->id_lancamento_tipo;
    }

    /**
     * @param mixed $id_lancamento_tipo
     */
    public function setIdLancamentoTipo($id_lancamento_tipo): void
    {
        $this->id_lancamento_tipo = $id_lancamento_tipo;
    }

    /**
     * @return mixed
     */
    public function getCodigoLancamentoCategoria()
    {
        return $this->codigo_lancamento_categoria;
    }

    /**
     * @param mixed $codigo_lancamento_categoria
     */
    public function setCodigoLancamentoCategoria($codigo_lancamento_categoria): void
    {
        $this->codigo_lancamento_categoria = $codigo_lancamento_categoria;
    }

    /**
     * @return mixed
     */
    public function getNomeLancamentoCategoria()
    {
        return $this->nome_lancamento_categoria;
    }

    /**
     * @param mixed $nome_lancamento_categoria
     */
    public function setNomeLancamentoCategoria($nome_lancamento_categoria): void
    {
        $this->nome_lancamento_categoria = $nome_lancamento_categoria;
    }
}
