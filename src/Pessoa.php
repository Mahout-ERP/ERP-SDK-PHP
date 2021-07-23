<?php

namespace Mahout\ERP;

class Pessoa extends Core
{
    public $id_pessoa_tipo;
    public $nome_pessoa;
    public $cpf_cnpj_pessoa;
    public $rg_ie_pessoa;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pessoa');
    }

    public function reset(): void
    {
        $this->id_pessoa_tipo = null;
        $this->nome_pessoa = null;
        $this->cpf_cnpj_pessoa = null;
        $this->rg_ie_pessoa = null;
    }

    public function filter(): string
    {

        $vet = '';

        if ($this->getNomePessoa() != '') {
            $vet .= '&nome_pessoa=' . urlencode($this->getNomePessoa());
        }

        if ($this->getCpfCnpjPessoa() != '') {
            $vet .= '&cpf_cnpj_pessoa=' . urlencode($this->getCpfCnpjPessoa());
        }

        if ($this->getRgIePessoa() != '') {
            $vet .= '&rg_ie_pessoa=' . urlencode($this->getRgIePessoa());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdPessoaTipo()
    {
        return $this->id_pessoa_tipo;
    }

    /**
     * @param mixed $id_pessoa_tipo
     */
    public function setIdPessoaTipo($id_pessoa_tipo): void
    {
        $this->id_pessoa_tipo = $id_pessoa_tipo;
    }

    /**
     * @return mixed
     */
    public function getNomePessoa()
    {
        return $this->nome_pessoa;
    }

    /**
     * @param mixed $nome_pessoa
     */
    public function setNomePessoa($nome_pessoa): void
    {
        $this->nome_pessoa = $nome_pessoa;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjPessoa()
    {
        return $this->cpf_cnpj_pessoa;
    }

    /**
     * @param mixed $cpf_cnpj_pessoa
     */
    public function setCpfCnpjPessoa($cpf_cnpj_pessoa): void
    {
        $this->cpf_cnpj_pessoa = $cpf_cnpj_pessoa;
    }

    /**
     * @return mixed
     */
    public function getRgIePessoa()
    {
        return $this->rg_ie_pessoa;
    }

    /**
     * @param mixed $rg_ie_pessoa
     */
    public function setRgIePessoa($rg_ie_pessoa): void
    {
        $this->rg_ie_pessoa = $rg_ie_pessoa;
    }
}
