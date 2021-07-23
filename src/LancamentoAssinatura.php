<?php


namespace Mahout\ERP;


class LancamentoAssinatura extends Core
{
    public $id_lancamento_assinatura;
    public $id_lancamento;
    public $id_assinatura;

    public function __construct($baseUrl, $publicKey, $token)
    {
        parent::__construct($baseUrl, $publicKey, $token);
        $this->setEntity('lancamento_assinatura');
    }

    public function reset(): void
    {
        $this->id_lancamento_assinatura = null;
        $this->id_lancamento = null;
        $this->id_assinatura = null;
    }

    public function filter(): string
    {
        $vet = '';

        if ($this->getIdLancamento() != '') {
            $vet .= '&id_lancamento=' . urlencode($this->getIdLancamento());
        }

        if ($this->getIdAssinatura() != '') {
            $vet .= '&id_assinatura=' . urlencode($this->getIdAssinatura());
        }

        return !empty($vet) ? $vet : '';
    }

    /**
     * @return mixed
     */
    public function getIdLancamentoAssinatura()
    {
        return $this->id_lancamento_assinatura;
    }

    /**
     * @param mixed $id_lancamento_assinatura
     */
    public function setIdLancamentoAssinatura($id_lancamento_assinatura): void
    {
        $this->id_lancamento_assinatura = $id_lancamento_assinatura;
    }

    /**
     * @return mixed
     */
    public function getIdLancamento()
    {
        return $this->id_lancamento;
    }

    /**
     * @param mixed $id_lancamento
     */
    public function setIdLancamento($id_lancamento): void
    {
        $this->id_lancamento = $id_lancamento;
    }

    /**
     * @return mixed
     */
    public function getIdAssinatura()
    {
        return $this->id_assinatura;
    }

    /**
     * @param mixed $id_assinatura
     */
    public function setIdAssinatura($id_assinatura): void
    {
        $this->id_assinatura = $id_assinatura;
    }
}