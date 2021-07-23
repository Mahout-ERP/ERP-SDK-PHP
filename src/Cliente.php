<?php

namespace Mahout\ERP;

class Cliente extends Core
{
    public $id_cliente;
    public $codigo_cliente;
    public $cpf_cnpj_cliente;
    public $data_cad_cliente;
    public $data_nascimento_cliente;
    public $id_cliente_grupo;
    public $id_cliente_status;
    public $id_estado_civil;
    public $id_estrangeiro_cliente;
    public $im_cliente;
    public $nome_cliente;
    public $obs_cliente;
    public $origem_cliente;
    public $pessoa_cliente;
    public $profissao_cliente;
    public $razao_social_cliente;
    public $renda_mensal_cliente;
    public $rg_ie_cliente;
    public $sexo_cliente;
    public $suframa_cliente;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('cliente');
    }

    public function reset(): void
    {
        $this->id_cliente = null;
        $this->codigo_cliente = null;
        $this->cpf_cnpj_cliente = null;
        $this->data_cad_cliente = null;
        $this->data_nascimento_cliente = null;
        $this->id_cliente_grupo = null;
        $this->id_cliente_status = null;
        $this->id_estado_civil = null;
        $this->id_estrangeiro_cliente = null;
        $this->im_cliente = null;
        $this->nome_cliente = null;
        $this->obs_cliente = null;
        $this->origem_cliente = null;
        $this->pessoa_cliente = null;
        $this->profissao_cliente = null;
        $this->razao_social_cliente = null;
        $this->renda_mensal_cliente = null;
        $this->rg_ie_cliente = null;
        $this->sexo_cliente = null;
        $this->suframa_cliente = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getCodigoCliente() != '') {
            $vet .= '&codigo_cliente=' . urlencode($this->getCodigoCliente());
        }

        if ($this->getCpfCnpjCliente() != '') {
            $vet .= '&cpf_cnpj_cliente=' . urlencode($this->getCpfCnpjCliente());
        }

        if ($this->getDataCadCliente() != '') {
            $vet .= '&data_cad_cliente=' . urlencode($this->getDataCadCliente());
        }

        if ($this->getDataNascimentoCliente() != '') {
            $vet .= '&data_nascimento_cliente=' . urlencode($this->getDataNascimentoCliente());
        }

        if ($this->getIdClienteGrupo() != '') {
            $vet .= '&id_cliente_grupo=' . urlencode($this->getIdClienteGrupo());
        }

        if ($this->getIdClienteStatus() != '') {
            $vet .= '&id_cliente_status=' . urlencode($this->getIdClienteStatus());
        }

        if ($this->getIdEstadoCivil() != '') {
            $vet .= '&id_estado_civil=' . urlencode($this->getIdEstadoCivil());
        }

        if ($this->getIdEstrangeiroCliente() != '') {
            $vet .= '&id_estrangeiro_cliente=' . urlencode($this->getIdEstrangeiroCliente());
        }

        if ($this->getImCliente() != '') {
            $vet .= '&im_cliente=' . urlencode($this->getImCliente());
        }

        if ($this->getNomeCliente() != '') {
            $vet .= '&nome_cliente=' . urlencode($this->getNomeCliente());
        }

        if ($this->getObsCliente() != '') {
            $vet .= '&obs_cliente=' . urlencode($this->getObsCliente());
        }

        if ($this->getOrigemCliente() != '') {
            $vet .= '&origem_cliente=' . urlencode($this->getOrigemCliente());
        }

        if ($this->getPessoaCliente() != '') {
            $vet .= '&pessoa_cliente=' . urlencode($this->getPessoaCliente());
        }

        if ($this->getProfissaoCliente() != '') {
            $vet .= '&profissao_cliente=' . urlencode($this->getProfissaoCliente());
        }

        if ($this->getRazaoSocialCliente() != '') {
            $vet .= '&razao_social_cliente=' . urlencode($this->getRazaoSocialCliente());
        }

        if ($this->getRendaMensalCliente() != '') {
            $vet .= '&renda_mensal_cliente=' . urlencode($this->getRendaMensalCliente());
        }

        if ($this->getRgIeCliente() != '') {
            $vet .= '&rg_ie_cliente=' . urlencode($this->getRgIeCliente());
        }

        if ($this->getSexoCliente() != '') {
            $vet .= '&sexo_cliente=' . urlencode($this->getSexoCliente());
        }

        if ($this->getSuframaCliente() != '') {
            $vet .= '&suframa_cliente=' . urlencode($this->getSuframaCliente());
        }

        return !empty($vet) ? $vet : '';
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

    /**
     * @return mixed
     */
    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    /**
     * @param mixed $codigo_cliente
     */
    public function setCodigoCliente($codigo_cliente): void
    {
        $this->codigo_cliente = $codigo_cliente;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjCliente()
    {
        return $this->cpf_cnpj_cliente;
    }

    /**
     * @param mixed $cpf_cnpj_cliente
     */
    public function setCpfCnpjCliente($cpf_cnpj_cliente): void
    {
        $this->cpf_cnpj_cliente = $cpf_cnpj_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataCadCliente()
    {
        return $this->data_cad_cliente;
    }

    /**
     * @param mixed $data_cad_cliente
     */
    public function setDataCadCliente($data_cad_cliente): void
    {
        $this->data_cad_cliente = $data_cad_cliente;
    }

    /**
     * @return mixed
     */
    public function getDataNascimentoCliente()
    {
        return $this->data_nascimento_cliente;
    }

    /**
     * @param mixed $data_nascimento_cliente
     */
    public function setDataNascimentoCliente($data_nascimento_cliente): void
    {
        $this->data_nascimento_cliente = $data_nascimento_cliente;
    }

    /**
     * @return mixed
     */
    public function getIdClienteGrupo()
    {
        return $this->id_cliente_grupo;
    }

    /**
     * @param mixed $id_cliente_grupo
     */
    public function setIdClienteGrupo($id_cliente_grupo): void
    {
        $this->id_cliente_grupo = $id_cliente_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdClienteStatus()
    {
        return $this->id_cliente_status;
    }

    /**
     * @param mixed $id_cliente_status
     */
    public function setIdClienteStatus($id_cliente_status): void
    {
        $this->id_cliente_status = $id_cliente_status;
    }

    /**
     * @return mixed
     */
    public function getIdEstadoCivil()
    {
        return $this->id_estado_civil;
    }

    /**
     * @param mixed $id_estado_civil
     */
    public function setIdEstadoCivil($id_estado_civil): void
    {
        $this->id_estado_civil = $id_estado_civil;
    }

    /**
     * @return mixed
     */
    public function getIdEstrangeiroCliente()
    {
        return $this->id_estrangeiro_cliente;
    }

    /**
     * @param mixed $id_estrangeiro_cliente
     */
    public function setIdEstrangeiroCliente($id_estrangeiro_cliente): void
    {
        $this->id_estrangeiro_cliente = $id_estrangeiro_cliente;
    }

    /**
     * @return mixed
     */
    public function getImCliente()
    {
        return $this->im_cliente;
    }

    /**
     * @param mixed $im_cliente
     */
    public function setImCliente($im_cliente): void
    {
        $this->im_cliente = $im_cliente;
    }

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nome_cliente;
    }

    /**
     * @param mixed $nome_cliente
     */
    public function setNomeCliente($nome_cliente): void
    {
        $this->nome_cliente = $nome_cliente;
    }

    /**
     * @return mixed
     */
    public function getObsCliente()
    {
        return $this->obs_cliente;
    }

    /**
     * @param mixed $obs_cliente
     */
    public function setObsCliente($obs_cliente): void
    {
        $this->obs_cliente = $obs_cliente;
    }

    /**
     * @return mixed
     */
    public function getOrigemCliente()
    {
        return $this->origem_cliente;
    }

    /**
     * @param mixed $origem_cliente
     */
    public function setOrigemCliente($origem_cliente): void
    {
        $this->origem_cliente = $origem_cliente;
    }

    /**
     * @return mixed
     */
    public function getPessoaCliente()
    {
        return $this->pessoa_cliente;
    }

    /**
     * @param mixed $pessoa_cliente
     */
    public function setPessoaCliente($pessoa_cliente): void
    {
        $this->pessoa_cliente = $pessoa_cliente;
    }

    /**
     * @return mixed
     */
    public function getProfissaoCliente()
    {
        return $this->profissao_cliente;
    }

    /**
     * @param mixed $profissao_cliente
     */
    public function setProfissaoCliente($profissao_cliente): void
    {
        $this->profissao_cliente = $profissao_cliente;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocialCliente()
    {
        return $this->razao_social_cliente;
    }

    /**
     * @param mixed $razao_social_cliente
     */
    public function setRazaoSocialCliente($razao_social_cliente): void
    {
        $this->razao_social_cliente = $razao_social_cliente;
    }

    /**
     * @return mixed
     */
    public function getRendaMensalCliente()
    {
        return $this->renda_mensal_cliente;
    }

    /**
     * @param mixed $renda_mensal_cliente
     */
    public function setRendaMensalCliente($renda_mensal_cliente): void
    {
        $this->renda_mensal_cliente = $renda_mensal_cliente;
    }

    /**
     * @return mixed
     */
    public function getRgIeCliente()
    {
        return $this->rg_ie_cliente;
    }

    /**
     * @param mixed $rg_ie_cliente
     */
    public function setRgIeCliente($rg_ie_cliente): void
    {
        $this->rg_ie_cliente = $rg_ie_cliente;
    }

    /**
     * @return mixed
     */
    public function getSexoCliente()
    {
        return $this->sexo_cliente;
    }

    /**
     * @param mixed $sexo_cliente
     */
    public function setSexoCliente($sexo_cliente): void
    {
        $this->sexo_cliente = $sexo_cliente;
    }

    /**
     * @return mixed
     */
    public function getSuframaCliente()
    {
        return $this->suframa_cliente;
    }

    /**
     * @param mixed $suframa_cliente
     */
    public function setSuframaCliente($suframa_cliente): void
    {
        $this->suframa_cliente = $suframa_cliente;
    }
}
