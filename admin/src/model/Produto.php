<?php

class Produto 
{
    protected $proCodigo;
    protected $proDescricao;
    protected $proComplemento;
    protected $proValor;
    protected $proComprimento;
    protected $proAltura;
    protected $proLargura;
    protected $proPesoBruto;
    protected $proPesoLiquido;
    protected $proImagemPrincipal;
    protected $proImagemSecundaria;

    //getters
    public function getProCodigo()
    {
        return $this->proCodigo;
    }

    public function getProDescricao()
    {
        return $this->proDescricao;
    }

    public function getProComplemento()
    {
        return $this->proComplemento;
    }

    public function getProValor()
    {
        return $this->proValor;
    }

    public function getProComprimento()
    {
        return $this->proComprimento;
    }

    public function getProAltura()
    {
        return $this->proAltura;
    }

    public function getProLargura()
    {
        return $this->proLargura;
    }
    
    public function getProPesoBruto()
    {
        return $this->proPesoBruto;
    }

    public function getProPesoLiquido()
    {
        return $this->proPesoLiquido;
    }

    public function getProImagemPrincipal()
    {
        return $this->proImagemPrincipal;
    }

    public function getProImagemSecundaria()
    {
        return $this->proImagemSecundaria;
    }

    //setters
    public function setProCodigo($proCodigo)
    {
        $this->proCodigo = $proCodigo;
    }

    public function setProDescricao($proDescricao)
    {
        $this->proDescricao = $proDescricao;
    }

    public function setProComplemento($proComplemento)
    {
        $this->proComplemento = $proComplemento;
    }

    public function setProValor($proValor)
    {
        $this->proValor = $proValor;
    }

    public function setProComprimento($proComprimento)
    {
        $this->proComprimento = $proComprimento;
    }

    public function setProAltura($proAltura)
    {
        $this->proAltura = $proAltura;
    }

    public function setProLargura($proLargura)
    {
        $this->proLargura = $proLargura;
    }

    public function setProPesoBruto($proPesoBruto)
    {
        $this->proPesoBruto = $proPesoBruto;
    }

    public function setProPesoLiquido($proPesoLiquido)
    {
        $this->proPesoLiquido = $proPesoLiquido;
    }

    public function setProImagemPrincipal($proImagemPrincipal)
    {
        $this->proImagemPrincipal = $proImagemPrincipal;
    }

    public function setProImagemSecundaria($proImagemSecundaria)
    {
        $this->proImagemSecundaria = $proImagemSecundaria;
    }
}
