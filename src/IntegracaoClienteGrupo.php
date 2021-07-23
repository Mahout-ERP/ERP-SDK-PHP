<?php

namespace Mahout\ERP;

class IntegracaoClienteGrupo extends Core
{
    public $id_integracao_cliente_grupo;
    public $id_integracao;
    public $id_cliente_grupo;
    public $codigo_integracao_cliente_grupo;
    public $data_cad_integracao_cliente_grupo;
    public $data_alt_integracao_cliente_grupo;
    public $data_imp_integracao_cliente_grupo;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('integracao_cliente_grupo');
    }

    public function reset(): void
    {
        $this->id_integracao_cliente_grupo = null;
        $this->id_integracao = null;
        $this->id_cliente_grupo = null;
        $this->codigo_integracao_cliente_grupo = null;
        $this->data_cad_integracao_cliente_grupo = null;
        $this->data_alt_integracao_cliente_grupo = null;
        $this->data_imp_integracao_cliente_grupo = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdIntegracao() != '') {
            $vet .= '&id_integracao=' . urlencode($this->getIdIntegracao());
        }

        if ($this->getIdClienteGrupo() != '') {
            $vet .= '&id_cliente_grupo=' . urlencode($this->getIdClienteGrupo());
        }

        if ($this->getCodigoIntegracaoClienteGrupo() != '') {
            $vet .= '&codigo_integracao_cliente_grupo=' . urlencode($this->getCodigoIntegracaoClienteGrupo());
        }

        if ($this->getDataCadIntegracaoClienteGrupo() != '') {
            $vet .= '&data_cad_integracao_cliente_grupo=' . urlencode($this->getDataCadIntegracaoClienteGrupo());
        }

        if ($this->getDataAltIntegracaoClienteGrupo() != '') {
            $vet .= '&data_alt_integracao_cliente_grupo=' . urlencode($this->getDataAltIntegracaoClienteGrupo());
        }

        if ($this->getDataimpIntegracaoClienteGrupo() != '') {
            $vet .= '&data_imp_integracao_cliente_grupo=' . urlencode($this->getDataimpIntegracaoClienteGrupo());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdIntegracaoClienteGrupo()
    {
        return $this->id_integracao_cliente_grupo;
    }

    /**
     * @param mixed $id_integracao_cliente_grupo
     */
    public function setIdIntegracaoClienteGrupo($id_integracao_cliente_grupo): void
    {
        $this->id_integracao_cliente_grupo = $id_integracao_cliente_grupo;
    }

    /**
     * @return mixed
     */
    public function getIdIntegracao()
    {
        return $this->id_integracao;
    }

    /**
     * @param mixed $id_integracao
     */
    public function setIdIntegracao($id_integracao): void
    {
        $this->id_integracao = $id_integracao;
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
    public function getCodigoIntegracaoClienteGrupo()
    {
        return $this->codigo_integracao_cliente_grupo;
    }

    /**
     * @param mixed $codigo_integracao_cliente_grupo
     */
    public function setCodigoIntegracaoClienteGrupo($codigo_integracao_cliente_grupo): void
    {
        $this->codigo_integracao_cliente_grupo = $codigo_integracao_cliente_grupo;
    }

    /**
     * @return mixed
     */
    public function getDataCadIntegracaoClienteGrupo()
    {
        return $this->data_cad_integracao_cliente_grupo;
    }

    /**
     * @param mixed $data_cad_integracao_cliente_grupo
     */
    public function setDataCadIntegracaoClienteGrupo($data_cad_integracao_cliente_grupo): void
    {
        $this->data_cad_integracao_cliente_grupo = $data_cad_integracao_cliente_grupo;
    }

    /**
     * @return mixed
     */
    public function getDataAltIntegracaoClienteGrupo()
    {
        return $this->data_alt_integracao_cliente_grupo;
    }

    /**
     * @param mixed $data_alt_integracao_cliente_grupo
     */
    public function setDataAltIntegracaoClienteGrupo($data_alt_integracao_cliente_grupo): void
    {
        $this->data_alt_integracao_cliente_grupo = $data_alt_integracao_cliente_grupo;
    }

    /**
     * @return mixed
     */
    public function getDataImpIntegracaoClienteGrupo()
    {
        return $this->data_imp_integracao_cliente_grupo;
    }

    /**
     * @param mixed $data_imp_integracao_cliente_grupo
     */
    public function setDataImpIntegracaoClienteGrupo($data_imp_integracao_cliente_grupo): void
    {
        $this->data_imp_integracao_cliente_grupo = $data_imp_integracao_cliente_grupo;
    }
}