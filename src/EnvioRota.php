<?php

namespace Mahout\ERP;

class EnvioRota extends Core
{
    public $id_envio;
    public $id_envio_modalidade;
    public $id_fornecedor;
    public $cep_destino_envio_rota;
    public $cep_origem_envio_rota;
    public $custo_envio_rota;
    public $data_coleta_envio_rota;
    public $data_entrega_envio_rota;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('envio_rota');
    }

    public function reset(): void
    {
        $this->id_envio = null;
        $this->id_envio_modalidade = null;
        $this->id_fornecedor = null;
        $this->cep_destino_envio_rota = null;
        $this->cep_origem_envio_rota = null;
        $this->custo_envio_rota = null;
        $this->data_coleta_envio_rota = null;
        $this->data_entrega_envio_rota = null;

    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdEnvioModalidade() != '') {
            $vet .= '&id_envio_modalidade=' . urlencode($this->getIdEnvioModalidade());
        }

        if ($this->getIdFornecedor() != '') {
            $vet .= '&id_fornecedor=' . urlencode($this->getIdFornecedor());
        }

        if ($this->getCepDestinoEnvioRota() != '') {
            $vet .= '&cep_destino_envio_rota=' . urlencode($this->getCepDestinoEnvioRota());
        }

        if ($this->getCepOrigemEnvioRota() != '') {
            $vet .= '&cep_origem_envio_rota=' . urlencode($this->getCepOrigemEnvioRota());
        }

        if ($this->getCustoEnvioRota() != '') {
            $vet .= '&custo_envio_rota=' . urlencode($this->getCustoEnvioRota());
        }

        if ($this->getDataColetaEnvioRota() != '') {
            $vet .= '&data_coleta_envio_rota=' . urlencode($this->getDataColetaEnvioRota());
        }

        if ($this->getDataEntregaEnvioRota() != '') {
            $vet .= '&data_entrega_envio_rota=' . urlencode($this->getDataEntregaEnvioRota());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdEnvio()
    {
        return $this->id_envio;
    }

    /**
     * @param mixed $id_envio
     */
    public function setIdEnvio($id_envio): void
    {
        $this->id_envio = $id_envio;
    }

    /**
     * @return mixed
     */
    public function getIdEnvioModalidade()
    {
        return $this->id_envio_modalidade;
    }

    /**
     * @param mixed $id_envio_modalidade
     */
    public function setIdEnvioModalidade($id_envio_modalidade): void
    {
        $this->id_envio_modalidade = $id_envio_modalidade;
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->id_fornecedor;
    }

    /**
     * @param mixed $id_fornecedor
     */
    public function setIdFornecedor($id_fornecedor): void
    {
        $this->id_fornecedor = $id_fornecedor;
    }

    /**
     * @return mixed
     */
    public function getCepDestinoEnvioRota()
    {
        return $this->cep_destino_envio_rota;
    }

    /**
     * @param mixed $cep_destino_envio_rota
     */
    public function setCepDestinoEnvioRota($cep_destino_envio_rota): void
    {
        $this->cep_destino_envio_rota = $cep_destino_envio_rota;
    }

    /**
     * @return mixed
     */
    public function getCepOrigemEnvioRota()
    {
        return $this->cep_origem_envio_rota;
    }

    /**
     * @param mixed $cep_origem_envio_rota
     */
    public function setCepOrigemEnvioRota($cep_origem_envio_rota): void
    {
        $this->cep_origem_envio_rota = $cep_origem_envio_rota;
    }

    /**
     * @return mixed
     */
    public function getCustoEnvioRota()
    {
        return $this->custo_envio_rota;
    }

    /**
     * @param mixed $custo_envio_rota
     */
    public function setCustoEnvioRota($custo_envio_rota): void
    {
        $this->custo_envio_rota = $custo_envio_rota;
    }

    /**
     * @return mixed
     */
    public function getDataColetaEnvioRota()
    {
        return $this->data_coleta_envio_rota;
    }

    /**
     * @param mixed $data_coleta_envio_rota
     */
    public function setDataColetaEnvioRota($data_coleta_envio_rota): void
    {
        $this->data_coleta_envio_rota = $data_coleta_envio_rota;
    }

    /**
     * @return mixed
     */
    public function getDataEntregaEnvioRota()
    {
        return $this->data_entrega_envio_rota;
    }

    /**
     * @param mixed $data_entrega_envio_rota
     */
    public function setDataEntregaEnvioRota($data_entrega_envio_rota): void
    {
        $this->data_entrega_envio_rota = $data_entrega_envio_rota;
    }
}

