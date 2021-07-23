<?php

namespace Mahout\ERP;

class PessoaTipo extends Core
{
    public $id_pessoa_tipo;
    public $nome_pessoa;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pessoa_tipo');
    }

    public function reset(): void
    {
        $this->id_pessoa_tipo = null;
        $this->nome_pessoa = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getNomePessoa() != '') {
            $vet .= '&nome_pessoa=' . urlencode($this->getNomePessoa());
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
}
