<?php
class Publicacao
{
    private $pub_id;
    private $isbn;
    private $titulo;
    private $autor;
    private $editora;
    private $preco;

    public function Publicacao()
    {

    }

    public function getId()
    {
        return $this->pub_id;
    }

    public function setId($id)
    {
        $this->pub_id = $id;
    }

    public function getISBN()
    {
        return $this->isbn;
    }

    public function setISBN($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getEditora()
    {
        return $this->editora;
    }

    public function setEditora($editora)
    {
        return $this->editora = $editora;
    }

    public function getPreco()
    {
        return $this->preco;

    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}
