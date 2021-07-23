<?php

namespace Mahout\ERP;

use Curl\Curl;

class Pedido extends Core
{
    public $id_pedido;
    public $id_canal;
    public $id_departamento;
    public $id_empresa;
    public $id_forma_recebimento;
    public $id_pedido_categoria;
    public $id_pedido_status;
    public $id_pedido_tipo;
    public $id_usuario;
    public $data_pedido;
    public $data_fim_pedido;
    public $data_ini_pedido;
    public $chave_nfe_pedido;
    public $nota_fiscal_pedido;
    public $obs_pedido;
    public $desconto_convenio_pedido;
    public $desconto_pedido;
    public $valor_adicional_pedido;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('pedido');
    }

    public function reset(): void
    {
        $this->id_pedido = null;
        $this->id_canal = null;
        $this->id_departamento = null;
        $this->id_empresa = null;
        $this->id_forma_recebimento = null;
        $this->id_pedido_categoria = null;
        $this->id_pedido_status = null;
        $this->id_pedido_tipo = null;
        $this->id_usuario = null;
        $this->data_pedido = null;
        $this->data_fim_pedido = null;
        $this->data_ini_pedido = null;
        $this->chave_nfe_pedido = null;
        $this->nota_fiscal_pedido = null;
        $this->obs_pedido = null;
        $this->desconto_convenio_pedido = null;
        $this->desconto_pedido = null;
        $this->valor_adicional_pedido= null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getDataFimPedido() != '') {
            $vet .= '&data_fim_pedido=' . urlencode($this->getDataFimPedido());
        }

        if ($this->getDataIniPedido() != '') {
            $vet .= '&data_ini_pedido=' . urlencode($this->getDataIniPedido());
        }

        if ($this->getDataPedido() != '') {
            $vet .= '&data_pedido=' . urlencode($this->getDataPedido());
        }

        if ($this->getIdCanal() != '') {
            $vet .= '&id_canal =' . urlencode($this->getIdCanal());
        }

        if ($this->getIdDepartamento() != '') {
            $vet .= '&id_departamento=' . urlencode($this->getIdDepartamento());
        }

        if ($this->getIdEmpresa() != '') {
            $vet .= '&id_empresa=' . urlencode($this->getIdEmpresa());
        }

        if ($this->getIdFormaRecebimento() != '') {
            $vet .= '&id_forma_recebimento=' . urlencode($this->getIdFormaRecebimento());
        }

        if ($this->getIdPedidoCategoria() != '') {
            $vet .= '&id_pedido_categoria=' . urlencode($this->getIdPedidoCategoria());
        }

        if ($this->getIdPedidoStatus() != '') {
            $vet .= '&id_pedido_status=' . urlencode($this->getIdPedidoStatus());
        }

        if ($this->getIdPedidoTipo() != '') {
            $vet .= '&id_pedido_tipo=' . urlencode($this->getIdPedidoTipo());
        }

        if ($this->getIdUsuario() != '') {
            $vet .= '&id_usuario=' . urlencode($this->getIdUsuario());
        }

        if ($this->getChaveNfePedido() != '') {
            $vet .= '&chave_nfe_pedido=' . urlencode($this->getChaveNfePedido());
        }

        if ($this->getNotaFiscalPedido() != '') {
            $vet .= '&nota_fiscal_pedido=' . urlencode($this->getNotaFiscalPedido());
        }

        if ($this->getObsPedido() != '') {
            $vet .= '&obs_pedido=' . urlencode($this->getNotaFiscalPedido());
        }

        if ($this->getDescontoConvenioPedido() != '') {
            $vet .= '&desconto_convenio_pedido=' . urlencode($this->getDescontoConvenioPedido());
        }

        if ($this->getDescontoPedido() != '') {
            $vet .= '&desconto_pedido=' . urlencode($this->getDescontoPedido());
        }

        if ($this->getValorAdicionalPedido() != '') {
            $vet .= '&valor_adicional_pedido=' . urlencode($this->getValorAdicionalPedido());
        }

        return !empty($vet) ? $vet : '';
    }

    public function email_pedido($data)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/email_pedido/';

            $this->setUrl($url);
            $this->setData($data);

            $this->curl = new Curl();
            $this->curl->setHeader('Authorization', 'Basic ' . $this->getPublicKey());
            $this->curl->setHeader('mahout-api-key', $this->getToken());
            $this->curl->post($url, $data);

            $response = $this->curl->response;

            $this->curl->close();

            return $response;
        } catch (\Throwable $except) {
            return $except->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->id_pedido;
    }

    /**
     * @param mixed $id_pedido
     */
    public function setIdPedido($id_pedido): void
    {
        $this->id_pedido = $id_pedido;
    }

    /**
     * @return mixed
     */
    public function getChaveNfePedido()
    {
        return $this->chave_nfe_pedido;
    }

    /**
     * @param mixed $chave_nfe_pedido
     */
    public function setChaveNfePedido($chave_nfe_pedido): void
    {
        $this->chave_nfe_pedido = $chave_nfe_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataFimPedido()
    {
        return $this->data_fim_pedido;
    }

    /**
     * @param mixed $data_fim_pedido
     */
    public function setDataFimPedido($data_fim_pedido): void
    {
        $this->data_fim_pedido = $data_fim_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataIniPedido()
    {
        return $this->data_ini_pedido;
    }

    /**
     * @param mixed $data_ini_pedido
     */
    public function setDataIniPedido($data_ini_pedido): void
    {
        $this->data_ini_pedido = $data_ini_pedido;
    }

    /**
     * @return mixed
     */
    public function getDataPedido()
    {
        return $this->data_pedido;
    }

    /**
     * @param mixed $data_pedido
     */
    public function setDataPedido($data_pedido): void
    {
        $this->data_pedido = $data_pedido;
    }

    /**
     * @return mixed
     */
    public function getDescontoConvenioPedido()
    {
        return $this->desconto_convenio_pedido;
    }

    /**
     * @param mixed $desconto_convenio_pedido
     */
    public function setDescontoConvenioPedido($desconto_convenio_pedido): void
    {
        $this->desconto_convenio_pedido = $desconto_convenio_pedido;
    }

    /**
     * @return mixed
     */
    public function getDescontoPedido()
    {
        return $this->desconto_pedido;
    }

    /**
     * @return mixed
     */
    public function getValorAdicionalPedido()
    {
        return $this->valor_adicional_pedido;
    }

    /**
     * @param mixed $valor_adicional_pedido
     */
    public function setValorAdicionalPedido($valor_adicional_pedido): void
    {
        $this->valor_adicional_pedido = $valor_adicional_pedido;
    }

    /**
     * @param mixed $desconto_pedido
     */
    public function setDescontoPedido($desconto_pedido): void
    {
        $this->desconto_pedido = $desconto_pedido;
    }

    /**
     * @return mixed
     */
    public function getIdCanal()
    {
        return $this->id_canal;
    }

    /**
     * @param mixed $id_canal
     */
    public function setIdCanal($id_canal): void
    {
        $this->id_canal = $id_canal;
    }

    /**
     * @return mixed
     */
    public function getIdDepartamento()
    {
        return $this->id_departamento;
    }

    /**
     * @param mixed $id_departamento
     */
    public function setIdDepartamento($id_departamento): void
    {
        $this->id_departamento = $id_departamento;
    }

    /**
     * @return mixed
     */
    public function getIdEmpresa()
    {
        return $this->id_empresa;
    }

    /**
     * @param mixed $id_empresa
     */
    public function setIdEmpresa($id_empresa): void
    {
        $this->id_empresa = $id_empresa;
    }

    /**
     * @return mixed
     */
    public function getIdFormaRecebimento()
    {
        return $this->id_forma_recebimento;
    }

    /**
     * @param mixed $id_forma_recebimento
     */
    public function setIdFormaRecebimento($id_forma_recebimento): void
    {
        $this->id_forma_recebimento = $id_forma_recebimento;
    }

    /**
     * @return mixed
     */
    public function getIdPedidoCategoria()
    {
        return $this->id_pedido_categoria;
    }

    /**
     * @param mixed $id_pedido_categoria
     */
    public function setIdPedidoCategoria($id_pedido_categoria): void
    {
        $this->id_pedido_categoria = $id_pedido_categoria;
    }

    /**
     * @return mixed
     */
    public function getIdPedidoStatus()
    {
        return $this->id_pedido_status;
    }

    /**
     * @param mixed $id_pedido_status
     */
    public function setIdPedidoStatus($id_pedido_status): void
    {
        $this->id_pedido_status = $id_pedido_status;
    }

    /**
     * @return mixed
     */
    public function getIdPedidoTipo()
    {
        return $this->id_pedido_tipo;
    }

    /**
     * @param mixed $id_pedido_tipo
     */
    public function setIdPedidoTipo($id_pedido_tipo): void
    {
        $this->id_pedido_tipo = $id_pedido_tipo;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNotaFiscalPedido()
    {
        return $this->nota_fiscal_pedido;
    }

    /**
     * @param mixed $nota_fiscal_pedido
     */
    public function setNotaFiscalPedido($nota_fiscal_pedido): void
    {
        $this->nota_fiscal_pedido = $nota_fiscal_pedido;
    }

    /**
     * @return mixed
     */
    public function getObsPedido()
    {
        return $this->obs_pedido;
    }

    /**
     * @param mixed $obs_pedido
     */
    public function setObsPedido($obs_pedido): void
    {
        $this->obs_pedido = $obs_pedido;
    }
}
