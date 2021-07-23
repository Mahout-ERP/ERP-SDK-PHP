<?php

namespace Mahout\ERP;

class Contato extends Core
{
    public $id_contato;
    public $id_contato_status;
    public $id_contato_tipo;
    public $desc_contato;
    public $obs_contato;
    public $principal_contato;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('contato');
    }

    public function reset(): void
    {
        $this->id_contato = null;
        $this->id_contato_status = null;
        $this->id_contato_tipo = null;
        $this->desc_contato = null;
        $this->obs_contato = null;
        $this->principal_contato = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getDescContato()!= '') {
            $vet .= '&desc_contato=' . urlencode($this->getDescContato());
        }

        if ($this->getIdContatoStatus() != '') {
            $vet .= '&id_contato_status=' . urlencode($this->getIdContatoStatus());
        }

        if ($this->getIdContatoTipo() != '') {
            $vet .= '&id_contato_tipo=' . urlencode($this->getIdContatoTipo());
        }

        if ($this->getObsContato() != '') {
            $vet .= '&obs_contato=' . urlencode($this->getObsContato());
        }

        if ($this->getPrincipalContato() != '') {
            $vet .= '&principal_contato=' . urlencode($this->getPrincipalContato());
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
    public function getDescContato()
    {
        return $this->desc_contato;
    }

    /**
     * @param mixed $desc_contato
     */
    public function setDescContato($desc_contato): void
    {
        $this->desc_contato = $desc_contato;
    }

    /**
     * @return mixed
     */
    public function getIdContatoStatus()
    {
        return $this->id_contato_status;
    }

    /**
     * @param mixed $id_contato_status
     */
    public function setIdContatoStatus($id_contato_status): void
    {
        $this->id_contato_status = $id_contato_status;
    }

    /**
     * @return mixed
     */
    public function getIdContatoTipo()
    {
        return $this->id_contato_tipo;
    }

    /**
     * @param mixed $id_contato_tipo
     */
    public function setIdContatoTipo($id_contato_tipo): void
    {
        $this->id_contato_tipo = $id_contato_tipo;
    }

    /**
     * @return mixed
     */
    public function getObsContato()
    {
        return $this->obs_contato;
    }

    /**
     * @param mixed $obs_contato
     */
    public function setObsContato($obs_contato): void
    {
        $this->obs_contato = $obs_contato;
    }

    /**
     * @return mixed
     */
    public function getPrincipalContato()
    {
        return $this->principal_contato;
    }

    /**
     * @param mixed $principal_contato
     */
    public function setPrincipalContato($principal_contato): void
    {
        $this->principal_contato = $principal_contato;
    }
}
