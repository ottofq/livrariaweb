<?php
class Livro
{
    private $isbn;
    private $titulo;
    private $edicao_num;
    private $ano_publicacao;
    private $descricao;
    private $id;

    public function Livro($isbn, $titulo, $edicao_num, $ano_publicacao, $descricao)
    {
        $this->isbn           = $isbn;
        $this->titulo         = $titulo;
        $this->edicao_num     = $edicao_num;
        $this->ano_publicacao = $ano_publicacao;
        $this->descricao      = $descricao;

    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getEdicao()
    {
        return $this->edicao_num;
    }

    public function getAno()
    {
        return $this->ano_publicacao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setEdicao($edicao_num)
    {
        $this->edicao_num = $edicao_num;
    }

    public function setAno($ano)
    {
        $this->ano_publicacao = $ano;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}
