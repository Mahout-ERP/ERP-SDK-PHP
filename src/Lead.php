<?php

namespace Mahout\ERP;

class Lead extends Core
{
    public $id_lead;
    public $id_lead_status;
    public $id_lead_origem;
    public $id_lead_avaliacao;
    public $id_lead_categoria;
    public $id_usuario_responsavel;
    public $nome_lead;
    public $pessoa_lead;
    public $data_cad_lead;
    public $oportunidade_lead;
    public $razão_social_lead;
    public $cpf_cnpj_lead;
    public $data_nascimento_lead;
    public $sexo_lead;
    public $obs_lead;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lead');
    }

    public function reset(): void
    {
        $this->id_lead = null;
        $this->id_lead_status = null;
        $this->id_lead_origem = null;
        $this->id_lead_avaliacao = null;
        $this->id_lead_categoria = null;
        $this->id_usuario_responsavel = null;
        $this->nome_lead = null;
        $this->pessoa_lead = null;
        $this->data_cad_lead = null;
        $this->oportunidade_lead = null;
        $this->razão_social_lead = null;
        $this->cpf_cnpj_lead = null;
        $this->data_nascimento_lead = null;
        $this->sexo_lead = null;
        $this->obs_lead = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getNomeLead() != '') {
            $vet .= '&nome_lead=' . urlencode($this->getNomeLead());
        }

        if ($this->getPessoaLead() != '') {
            $vet .= '&pessoa_lead=' . urlencode($this->getPessoaLead());
        }

        if ($this->getDataCadLead() != '') {
            $vet .= '&data_cad_lead=' . urlencode($this->getDataCadLead());
        }

        if ($this->getOportunidadeLead() != '') {
            $vet .= '&oportunidade_lead=' . urlencode($this->getOportunidadeLead());
        }

        if ($this->getRazãoSocialLead() != '') {
            $vet .= '&razão_social_lead=' . urlencode($this->getRazãoSocialLead());
        }

        if ($this->getCpfCnpjLead() != '') {
            $vet .= '&cpf_cnpj_lead=' . urlencode($this->getCpfCnpjLead());
        }

        if ($this->getDataNascimentoLead() != '') {
            $vet .= '&data_nascimento_lead=' . urlencode($this->getDataNascimentoLead());
        }

        if ($this->getSexoLead() != '') {
            $vet .= '&sexo_lead=' . urlencode($this->getSexoLead());
        }

        if ($this->getObsLead() != '') {
            $vet .= '&obs_lead=' . urlencode($this->getObsLead());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLead()
    {
        return $this->id_lead;
    }

    /**
     * @param mixed $id_lead
     */
    public function setIdLead($id_lead): void
    {
        $this->id_lead = $id_lead;
    }

    /**
     * @return mixed
     */
    public function getIdLeadStatus()
    {
        return $this->id_lead_status;
    }

    /**
     * @param mixed $id_lead_status
     */
    public function setIdLeadStatus($id_lead_status): void
    {
        $this->id_lead_status = $id_lead_status;
    }

    /**
     * @return mixed
     */
    public function getIdLeadOrigem()
    {
        return $this->id_lead_origem;
    }

    /**
     * @param mixed $id_lead_origem
     */
    public function setIdLeadOrigem($id_lead_origem): void
    {
        $this->id_lead_origem = $id_lead_origem;
    }

    /**
     * @return mixed
     */
    public function getIdLeadAvaliacao()
    {
        return $this->id_lead_avaliacao;
    }

    /**
     * @param mixed $id_lead_avaliacao
     */
    public function setIdLeadAvaliacao($id_lead_avaliacao): void
    {
        $this->id_lead_avaliacao = $id_lead_avaliacao;
    }

    /**
     * @return mixed
     */
    public function getIdLeadCategoria()
    {
        return $this->id_lead_categoria;
    }

    /**
     * @param mixed $id_lead_categoria
     */
    public function setIdLeadCategoria($id_lead_categoria): void
    {
        $this->id_lead_categoria = $id_lead_categoria;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioResponsavel()
    {
        return $this->id_usuario_responsavel;
    }

    /**
     * @param mixed $id_usuario_responsavel
     */
    public function setIdUsuarioResponsavel($id_usuario_responsavel): void
    {
        $this->id_usuario_responsavel = $id_usuario_responsavel;
    }

    /**
     * @return mixed
     */
    public function getNomeLead()
    {
        return $this->nome_lead;
    }

    /**
     * @param mixed $nome_lead
     */
    public function setNomeLead($nome_lead): void
    {
        $this->nome_lead = $nome_lead;
    }

    /**
     * @return mixed
     */
    public function getPessoaLead()
    {
        return $this->pessoa_lead;
    }

    /**
     * @param mixed $pessoa_lead
     */
    public function setPessoaLead($pessoa_lead): void
    {
        $this->pessoa_lead = $pessoa_lead;
    }

    /**
     * @return mixed
     */
    public function getDataCadLead()
    {
        return $this->data_cad_lead;
    }

    /**
     * @param mixed $data_cad_lead
     */
    public function setDataCadLead($data_cad_lead): void
    {
        $this->data_cad_lead = $data_cad_lead;
    }

    /**
     * @return mixed
     */
    public function getOportunidadeLead()
    {
        return $this->oportunidade_lead;
    }

    /**
     * @param mixed $oportunidade_lead
     */
    public function setOportunidadeLead($oportunidade_lead): void
    {
        $this->oportunidade_lead = $oportunidade_lead;
    }

    /**
     * @return mixed
     */
    public function getRazãoSocialLead()
    {
        return $this->razão_social_lead;
    }

    /**
     * @param mixed $razão_social_lead
     */
    public function setRazãoSocialLead($razão_social_lead): void
    {
        $this->razão_social_lead = $razão_social_lead;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjLead()
    {
        return $this->cpf_cnpj_lead;
    }

    /**
     * @param mixed $cpf_cnpj_lead
     */
    public function setCpfCnpjLead($cpf_cnpj_lead): void
    {
        $this->cpf_cnpj_lead = $cpf_cnpj_lead;
    }

    /**
     * @return mixed
     */
    public function getDataNascimentoLead()
    {
        return $this->data_nascimento_lead;
    }

    /**
     * @param mixed $data_nascimento_lead
     */
    public function setDataNascimentoLead($data_nascimento_lead): void
    {
        $this->data_nascimento_lead = $data_nascimento_lead;
    }

    /**
     * @return mixed
     */
    public function getSexoLead()
    {
        return $this->sexo_lead;
    }

    /**
     * @param mixed $sexo_lead
     */
    public function setSexoLead($sexo_lead): void
    {
        $this->sexo_lead = $sexo_lead;
    }

    /**
     * @return mixed
     */
    public function getObsLead()
    {
        return $this->obs_lead;
    }

    /**
     * @param mixed $obs_lead
     */
    public function setObsLead($obs_lead): void
    {
        $this->obs_lead = $obs_lead;
    }
}
