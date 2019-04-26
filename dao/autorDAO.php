<?php
require_once '../classes/modelo.php';
require_once 'conexao.php';

class AutorDAO
{
    private $con;

    public function AutorDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirAutor(Autor $autor)
    {
        $sql = $this->con->prepare("insert into autores(nome,email,dt_nasc) values (:nom,:em,:data)");

        $sql->bindValue(':nom', $autor->getNome());
        $sql->bindValue(':em', $autor->getEmail());
        $sql->bindValue(':data', $this->converteDataMysql($autor->getDataNasc()));
        $sql->execute();

    }

    public function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }

    public function getAutores()
    {
        $rs = $this->con->query("SELECT * FROM autores");

        $lista = array();

        while ($autor = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $autor;
        }
        return $lista;
    }
    public function excluirAutor($id)
    {
        $sql = $this->con->prepare("DELETE FROM autores WHERE autor_id = :id");

        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}
