<?php

namespace Mahout\ERP;

class Endereco extends Core
{
    public $id_endereco;
    public $id_endereco_tipo;
    public $id_endereco_status;
    public $nome_endereco;
    public $logradouro_endereco;
    public $numero_endereco;
    public $complemento_endereco;
    public $bairro_endereco;
    public $cep_endereco;
    public $cidade_endereco;
    public $uf_endereco;
    public $pais_endereco;
    public $cod_ibge_endereco;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('endereco');
    }

    public function reset(): void
    {
        $this->id_endereco = null;
        $this->id_endereco_tipo = null;
        $this->id_endereco_status = null;
        $this->nome_endereco = null;
        $this->logradouro_endereco = null;
        $this->numero_endereco = null;
        $this->complemento_endereco = null;
        $this->bairro_endereco = null;
        $this->cep_endereco = null;
        $this->cidade_endereco = null;
        $this->uf_endereco = null;
        $this->pais_endereco = null;
        $this->cod_ibge_endereco = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdEnderecoTipo() != '') {
            $vet .= '&id_endereco_tipo=' . urlencode($this->getIdEnderecoTipo());
        }

        if ($this->getIdEnderecoStatus() != '') {
            $vet .= '&id_endereco_status=' . urlencode($this->getIdEnderecoStatus());
        }

        if ($this->getNomeEndereco() != '') {
            $vet .= '&nome_endereco=' . urlencode($this->getNomeEndereco());
        }

        if ($this->getLogradouroEndereco() != '') {
            $vet .= '&logradouro_endereco=' . urlencode($this->getLogradouroEndereco());
        }

        if ($this->getNumeroEndereco() != '') {
            $vet .= '&numero_endereco=' . urlencode($this->getNumeroEndereco());
        }

        if ($this->getComplementoEndereco() != '') {
            $vet .= '&complemento_endereco=' . urlencode($this->getComplementoEndereco());
        }

        if ($this->getBairroEndereco() != '') {
            $vet .= '&bairro_endereco=' . urlencode($this->getBairroEndereco());
        }

        if ($this->getCepEndereco() != '') {
            $vet .= '&cep_endereco=' . urlencode($this->getCepEndereco());
        }

        if ($this->getCidadeEndereco() != '') {
            $vet .= '&cidade_endereco=' . urlencode($this->getCidadeEndereco());
        }

        if ($this->getUfEndereco() != '') {
            $vet .= '&uf_endereco=' . urlencode($this->getUfEndereco());
        }

        if ($this->getPaisEndereco() != '') {
            $vet .= '&pais_endereco=' . urlencode($this->getPaisEndereco());
        }

        if ($this->getCodIbgeEndereco() != '') {
            $vet .= '&cod_ibge_endereco=' . urlencode($this->getCodIbgeEndereco());
        }

        return !empty($vet) ? $vet : '';
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

    /**
     * @return mixed
     */
    public function getIdEnderecoTipo()
    {
        return $this->id_endereco_tipo;
    }

    /**
     * @param mixed $id_endereco_tipo
     */
    public function setIdEnderecoTipo($id_endereco_tipo): void
    {
        $this->id_endereco_tipo = $id_endereco_tipo;
    }

    /**
     * @return mixed
     */
    public function getNomeEndereco()
    {
        return $this->nome_endereco;
    }

    /**
     * @param mixed $nome_endereco
     */
    public function setNomeEndereco($nome_endereco): void
    {
        $this->nome_endereco = $nome_endereco;
    }

    /**
     * @return mixed
     */
    public function getLogradouroEndereco()
    {
        return $this->logradouro_endereco;
    }

    /**
     * @param mixed $logradouro_endereco
     */
    public function setLogradouroEndereco($logradouro_endereco): void
    {
        $this->logradouro_endereco = $logradouro_endereco;
    }

    /**
     * @return mixed
     */
    public function getNumeroEndereco()
    {
        return $this->numero_endereco;
    }

    /**
     * @param mixed $numero_endereco
     */
    public function setNumeroEndereco($numero_endereco): void
    {
        $this->numero_endereco = $numero_endereco;
    }

    /**
     * @return mixed
     */
    public function getComplementoEndereco()
    {
        return $this->complemento_endereco;
    }

    /**
     * @param mixed $complemento_endereco
     */
    public function setComplementoEndereco($complemento_endereco): void
    {
        $this->complemento_endereco = $complemento_endereco;
    }

    /**
     * @return mixed
     */
    public function getBairroEndereco()
    {
        return $this->bairro_endereco;
    }

    /**
     * @param mixed $bairro_endereco
     */
    public function setBairroEndereco($bairro_endereco): void
    {
        $this->bairro_endereco = $bairro_endereco;
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
    public function getCidadeEndereco()
    {
        return $this->cidade_endereco;
    }

    /**
     * @param mixed $cidade_endereco
     */
    public function setCidadeEndereco($cidade_endereco): void
    {
        $this->cidade_endereco = $cidade_endereco;
    }

    /**
     * @return mixed
     */
    public function getUfEndereco()
    {
        return $this->uf_endereco;
    }

    /**
     * @param mixed $uf_endereco
     */
    public function setUfEndereco($uf_endereco): void
    {
        $this->uf_endereco = $uf_endereco;
    }

    /**
     * @return mixed
     */
    public function getPaisEndereco()
    {
        return $this->pais_endereco;
    }

    /**
     * @param mixed $pais_endereco
     */
    public function setPaisEndereco($pais_endereco): void
    {
        $this->pais_endereco = $pais_endereco;
    }

    /**
     * @return mixed
     */
    public function getCodIbgeEndereco()
    {
        return $this->cod_ibge_endereco;
    }

    /**
     * @param mixed $cod_ibge_endereco
     */
    public function setCodIbgeEndereco($cod_ibge_endereco): void
    {
        $this->cod_ibge_endereco = $cod_ibge_endereco;
    }

    /**
     * @return mixed
     */
    public function getIdEnderecoStatus()
    {
        return $this->id_endereco_status;
    }

    /**
     * @param mixed $id_endereco_status
     */
    public function setIdEnderecoStatus($id_endereco_status): void
    {
        $this->id_endereco_status = $id_endereco_status;
    }
}