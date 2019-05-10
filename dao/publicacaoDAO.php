<?php
require_once '../model/publicacao.php';
require_once 'conexao.php';

class PublicacaoDAO
{

    public function PublicacaoDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    private function getEditora($id)
    {
        $sql = $this->con->prepare("SELECT editora_nome FROM editora WHERE editora_id = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $editora = $sql->fetch(PDO::FETCH_OBJ);

        return $editora->editora_nome;
    }

    private function getTituloLivro($isbn)
    {
        $sql = $this->con->prepare("SELECT titulo FROM livros WHERE isbn = :isbn");

        $sql->bindValue(':isbn', $isbn);
        $sql->execute();

        $livro = $sql->fetch(PDO::FETCH_OBJ);

        return $livro->titulo;

    }

    private function getNomeAutor($id)
    {
        $sql = $this->con->prepare("SELECT nome FROM autores WHERE autor_id = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $autor = $sql->fetch(PDO::FETCH_OBJ);

        return $autor->nome;
    }

    public function getPublicacoes()
    {
        $rs = $this->con->query("SELECT * FROM publicacao");

        $lista = array();

        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            $publicacao = new Publicacao();
            $publicacao->setId($row->publicaco_id);
            $publicacao->setISBN($row->isbn);
            $publicacao->setTitulo($this->getTituloLivro($row->isbn));
            $publicacao->setAutor($this->getNomeAutor($row->autor_id));
            $publicacao->setEditora($this->getEditora($row->editora_id));
            $publicacao->setPreco($row->preco);
            $lista[] = $publicacao;
        }
        return $lista;

    }

    public function getPublicacao($id)
    {
        $rs = $this->con->prepare("SELECT * FROM publicacao WHERE publicacao_id = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $row = $rs->fetch(PDO::FETCH_OBJ);

        $publicacao = new Publicacao();
        $publicacao->setId($row->publicaco_id);
        $publicacao->setISBN($row->isbn);
        $publicacao->setTitulo($this->getTituloLivro($row->isbn));
        $publicacao->setAutor($this->getNomeAutor($row->autor_id));
        $publicacao->setEditora($this->getEditora($row->editora_id));
        $publicacao->setPreco($row->preco);

        return $publicacao;

    }
}
