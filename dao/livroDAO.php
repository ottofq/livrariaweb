<?php
require_once '../model/livro.php';
require_once 'conexao.php';

class LivroDAO
{
    private $con;

    public function LivroDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirLivro(Livro $livro)
    {
        $sql = $this->con->prepare("insert into livros(isbn,titulo,edicao_num,ano_publicacao,descricao) values (:isbn,:titulo,:edicao,:ano,:descricao)");

        $sql->bindValue(':isbn', $livro->getIsbn());
        $sql->bindValue(':titulo', $livro->getTitulo());
        $sql->bindValue(':edicao', $livro->getEdicao());
        $sql->bindValue(':ano', $livro->getAno());
        $sql->bindValue(':descricao', $livro->getDescricao());
        $sql->execute();

    }

    public function getLivros()
    {
        $rs = $this->con->query("SELECT * FROM livros");

        $lista = array();

        while ($livro = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $livro;
        }
        return $lista;
    }
    public function excluirLivro($isbn)
    {
        $sql = $this->con->prepare("DELETE FROM livros WHERE isbn = :isbn");

        $sql->bindValue(':isbn', $isbn);
        $sql->execute();
    }

    public function atualizarLivro(Livro $livro)
    {
        $sql = $this->con->prepare("UPDATE livros SET titulo = :titulo,edicao_num = :edicao,ano_publicacao = :ano,descricao = :descricao WHERE isbn = :isbn");

        $sql->bindValue(':isbn', $livro->getIsbn());
        $sql->bindValue(':titulo', $livro->getTitulo());
        $sql->bindValue(':edicao', $livro->getEdicao());
        $sql->bindValue(':ano', $livro->getAno());
        $sql->bindValue(':descricao', $livro->getDescricao());

        $sql->execute();

    }

    public function getLivro($isbn)
    {
        $sql = $this->con->prepare("SELECT * FROM livros WHERE isbn= :isbn");

        $sql->bindValue(':isbn', $isbn);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
