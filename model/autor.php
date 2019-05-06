<?php
class Autor
{
    private $nome;
    private $email;
    private $dt_nasc;
    private $id;

    public function Autor($nome, $email, $dt_nasc)
    {
        $this->nome    = $nome;
        $this->email   = $email;
        $this->dt_nasc = strtotime($dt_nasc);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getDataNasc()
    {
        return $this->dt_nasc;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = nome;
    }

    public function setDataNasc($dt_nasc)
    {
        $this->dt_nasc = strtotime($dt_nasc);
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}
