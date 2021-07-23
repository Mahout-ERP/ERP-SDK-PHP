<?php

namespace Mahout\ERP;

use Curl\Curl;

class Usuario extends Core
{
    public $id_usuario;
    public $comissao_usuario;
    public $cpf_cnpj_usuario;
    public $data_cad_usuario;
    public $email_usuario;
    public $id_departamento;
    public $id_usuario_status;
    public $id_usuario_tipo;
    public $nome_usuario;
    public $primeiro_acesso_usuario;
    public $senha_usuario;
    public $conf_senha_usuario;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('usuario');
    }

    public function reset(): void
    {
        $this->id_usuario = null;
        $this->comissao_usuario = null;
        $this->cpf_cnpj_usuario = null;
        $this->data_cad_usuario = null;
        $this->email_usuario = null;
        $this->id_departamento = null;
        $this->id_usuario_status = null;
        $this->id_usuario_tipo = null;
        $this->nome_usuario = null;
        $this->primeiro_acesso_usuario = null;
        $this->senha_usuario = null;
        $this->conf_senha_usuario = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getComissaoUsuario() != '') {
            $vet .= '&comissao_usuario=' . urlencode($this->getComissaoUsuario());
        }

        if ($this->getCpfCnpjUsuario() != '') {
            $vet .= '&cpf_cnpj_usuario=' . urlencode($this->getCpfCnpjUsuario());
        }

        if ($this->getDataCadUsuario() != '') {
            $vet .= '&data_cad_usuario=' . urlencode($this->getDataCadUsuario());
        }

        if ($this->getEmailUsuario() != '') {
            $vet .= '&email_usuario=' . urlencode($this->getEmailUsuario());
        }

        if ($this->getIdDepartamento() != '') {
            $vet .= '&id_departamento=' . urlencode($this->getIdDepartamento());
        }

        if ($this->getIdUsuarioStatus() != '') {
            $vet .= '&id_usuario_status=' . urlencode($this->getIdUsuarioStatus());
        }

        if ($this->getIdUsuarioTipo() != '') {
            $vet .= '&id_usuario_tipo=' . urlencode($this->getIdUsuarioTipo());
        }

        if ($this->getNomeUsuario() != '') {
            $vet .= '&nome_usuario=' . urlencode($this->getNomeUsuario());
        }

        if ($this->getPrimeiroAcessoUsuario() != '') {
            $vet .= '&primeiro_acesso_usuario=' . urlencode($this->getPrimeiroAcessoUsuario());
        }

        return !empty($vet) ? $vet : '';
    }

    public function login($login_usuario, $senha_usuario)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/login/';

            $data = [
                'login_usuario' => $login_usuario,
                'senha_usuario' => $senha_usuario
            ];

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

    public function esqueci_senha($email_usuario)
    {
        try {
            $url = $this->getBaseUrl() . $this->getEntity() . '/esqueci_senha/';

            $data = [
                'email_usuario' => $email_usuario
            ];

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
    public function getComissaoUsuario()
    {
        return $this->comissao_usuario;
    }

    /**
     * @param mixed $comissao_usuario
     */
    public function setComissaoUsuario($comissao_usuario): void
    {
        $this->comissao_usuario = $comissao_usuario;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpjUsuario()
    {
        return $this->cpf_cnpj_usuario;
    }

    /**
     * @param mixed $cpf_cnpj_usuario
     */
    public function setCpfCnpjUsuario($cpf_cnpj_usuario): void
    {
        $this->cpf_cnpj_usuario = $cpf_cnpj_usuario;
    }

    /**
     * @return mixed
     */
    public function getDataCadUsuario()
    {
        return $this->data_cad_usuario;
    }

    /**
     * @param mixed $data_cad_usuario
     */
    public function setDataCadUsuario($data_cad_usuario): void
    {
        $this->data_cad_usuario = $data_cad_usuario;
    }

    /**
     * @return mixed
     */
    public function getEmailUsuario()
    {
        return $this->email_usuario;
    }

    /**
     * @param mixed $email_usuario
     */
    public function setEmailUsuario($email_usuario): void
    {
        $this->email_usuario = $email_usuario;
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
    public function getIdUsuarioStatus()
    {
        return $this->id_usuario_status;
    }

    /**
     * @param mixed $id_usuario_status
     */
    public function setIdUsuarioStatus($id_usuario_status): void
    {
        $this->id_usuario_status = $id_usuario_status;
    }

    /**
     * @return mixed
     */
    public function getIdUsuarioTipo()
    {
        return $this->id_usuario_tipo;
    }

    /**
     * @param mixed $id_usuario_tipo
     */
    public function setIdUsuarioTipo($id_usuario_tipo): void
    {
        $this->id_usuario_tipo = $id_usuario_tipo;
    }

    /**
     * @return mixed
     */
    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }

    /**
     * @param mixed $nome_usuario
     */
    public function setNomeUsuario($nome_usuario): void
    {
        $this->nome_usuario = $nome_usuario;
    }

    /**
     * @return mixed
     */
    public function getPrimeiroAcessoUsuario()
    {
        return $this->primeiro_acesso_usuario;
    }

    /**
     * @param mixed $primeiro_acesso_usuario
     */
    public function setPrimeiroAcessoUsuario($primeiro_acesso_usuario): void
    {
        $this->primeiro_acesso_usuario = $primeiro_acesso_usuario;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senha_usuario;
    }

    /**
     * @param mixed $senha_usuario
     */
    public function setSenhaUsuario($senha_usuario): void
    {
        $this->senha_usuario = $senha_usuario;
    }

    /**
     * @return mixed
     */
    public function getConfSenhaUsuario()
    {
        return $this->conf_senha_usuario;
    }

    /**
     * @param mixed $conf_senha_usuario
     */
    public function setConfSenhaUsuario($conf_senha_usuario): void
    {
        $this->conf_senha_usuario = $conf_senha_usuario;
    }
}
