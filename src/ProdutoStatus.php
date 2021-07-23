<?php

namespace Mahout\ERP;

class ProdutoStatus extends Core
{
    public $id_produto_status;
    public $nome_produto_status;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('produto_status');
    }

    public function reset(): void
    {
        $this->id_produto_status = null;
        $this->nome_produto_status = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdProdutoStatus() != '') {
            $vet .= '&id_produto_status=' . urlencode($this->getIdProdutoStatus());
        }

        if ($this->getNomeProdutoStatus() != '') {
            $vet .= '&nome_produto_status=' . urlencode($this->getNomeProdutoStatus());
        }
        
        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdProdutoStatus()
    {
        return $this->id_produto_status;
    }

    /**
     * @param mixed $id_produto_status
     */
    public function setIdProdutoStatus($id_produto_status): void
    {
        $this->id_produto_status = $id_produto_status;
    }

    /**
     * @return mixed
     */
    public function getNomeProdutoStatus()
    {
        return $this->nome_produto_status;
    }

    /**
     * @param mixed $nome_produto_status
     */
    public function setNomeProdutoStatus($nome_produto_status): void
    {
        $this->nome_produto_status = $nome_produto_status;
    }
}
