<?php
class Cliente
{
    private $cpf;
    private $nome;
    private $logradouro;
    private $cidade;
    private $estado;
    private $cep;
    private $data_nascimento;
    private $email;
    private $senha;
    private $rg;

    public function Cliente($cpf, $nome, $logradouro, $cidade, $estado, $cep, $data_nascimento, $email, $senha, $rg)
    {
        $this->cpf             = $cpf;
        $this->nome            = $nome;
        $this->logradouro      = $logradouro;
        $this->cidade          = $cidade;
        $this->estado          = $estado;
        $this->cep             = $cep;
        $this->data_nascimento = strtotime($data_nascimento);
        $this->email           = $email;
        $this->senha           = $senha;
        $this->rg              = $rg;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getCEP()
    {
        return $this->cep;
    }

    public function getDataNasc()
    {
        return $this->data_nascimento;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    public function setNome($nome)
    {
        $this->nome = nome;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setCEP($cep)
    {
        $this->cep = $cep;
    }

    public function setDataNasc($data_nascimento)
    {
        $this->data_nascimento = strtotime($data_nascimento);
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function setRG($rg)
    {
        $this->rg = $rg;
    }

}
