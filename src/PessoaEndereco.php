<?php

namespace Mahout\ERP;

class PessoaEndereco extends Core
{
    public $id_pessoa_endereco;
    public $id_pessoa;
    public $id_endereco;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pessoa_endereco');
    }

    public function reset(): void
    {
        $this->id_pessoa_endereco = null;
        $this->id_endereco = null;
        $this->id_pessoa = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPessoa() != '') {
            $vet .= '&id_pessoa=' . urlencode($this->getIdPessoa());
        }

        if ($this->getIdEndereco() != '') {
            $vet .= '&id_endereco=' . urlencode($this->getIdEndereco());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdPessoaEndereco()
    {
        return $this->id_pessoa_endereco;
    }

    /**
     * @param mixed $id_pessoa_endereco
     */
    public function setIdPessoaEndereco($id_pessoa_endereco): void
    {
        $this->id_pessoa_endereco = $id_pessoa_endereco;
    }

    /**
     * @return mixed
     */
    public function getIdPessoa()
    {
        return $this->id_pessoa;
    }

    /**
     * @param mixed $id_pessoa
     */
    public function setIdPessoa($id_pessoa): void
    {
        $this->id_pessoa = $id_pessoa;
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
}
