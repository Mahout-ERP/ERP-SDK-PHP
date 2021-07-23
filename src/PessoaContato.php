<?php

namespace Mahout\ERP;

class PessoaContato extends Core
{
    public $id_contato;
    public $id_pessoa;
    public $id_pessoa_contato;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pessoa_contato');
    }

    public function reset(): void
    {
        $this->id_contato = null;
        $this->id_pessoa = null;
        $this->id_pessoa_contato = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdPessoa() != '') {
            $vet .= '&id_pessoa=' . urlencode($this->getIdPessoa());
        }

        if ($this->getIdPessoaContato() != '') {
            $vet .= '&id_pessoa_contato=' . urlencode($this->getIdPessoaContato());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdContato()
    {
        return $this->id_contato;
    }

    /**
     * @param mixed $id_contato
     */
    public function setIdContato($id_contato): void
    {
        $this->id_contato = $id_contato;
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
    public function getIdPessoaContato()
    {
        return $this->id_pessoa_contato;
    }

    /**
     * @param mixed $id_pessoa_contato
     */
    public function setIdPessoaContato($id_pessoa_contato): void
    {
        $this->id_pessoa_contato = $id_pessoa_contato;
    }
}
