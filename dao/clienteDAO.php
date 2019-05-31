<?php
require_once '../model/cliente.php';
require_once 'conexao.php';

class ClienteDAO
{
    private $con;

    public function ClienteDAO()
    {
        $c         = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirCliente(Cliente $cliente)
    {
        $sql = $this->con->prepare("insert into clientes (cpf,nome,logradouro,cidade,estado,cep,data_nascimento,email,senha,rg) values (:cpf,:nome,:logradouro,:cidade,:estado,:cep,:data_nascimento,:email,:senha,:rg)");

        $sql->bindValue(':cpf', $cliente->getCPF());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':logradouro', $cliente->getLogradouro());
        $sql->bindValue(':cidade', $cliente->getCidade());
        $sql->bindValue(':estado', $cliente->getEstado());
        $sql->bindValue(':cep', $cliente->getCEP());
        $sql->bindValue(':data_nascimento', $this->converteDataMysql($cliente->getDataNasc()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':rg', $cliente->getRG());
        $sql->execute();

    }

    public function converteDataMysql($data)
    {
        return date('Y-m-d', $data);
    }

    public function getClientes()
    {
        $rs = $this->con->query("SELECT * FROM clientes");

        $lista = array();

        while ($cliente = $rs->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $cliente;
        }
        return $lista;
    }
    public function excluirCliente($cpf)
    {
        $sql = $this->con->prepare("DELETE FROM clientes WHERE cpf = :cpf");

        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }

    public function atualizarClientes(Cliente $cliente)
    {
        $sql = $this->con->prepare("UPDATE clientes SET cpf = :cpf,nome = :nome,logradouro = :logradouro,cidade = :cidade,estado = :estado,
        cep = :cep,data_nascimento = :data_nascimento,email = :email,senha = :senha,rg = :rg WHERE cpf = :cpf");

        $sql->bindValue(':cpf', $cliente->getCPF());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':logradouro', $cliente->getLogradouro());
        $sql->bindValue(':cidade', $cliente->getCidade());
        $sql->bindValue(':estado', $cliente->getEstado());
        $sql->bindValue(':cep', $cliente->getCEP());
        $sql->bindValue(':data_nascimento', $this->converteDataMysql($cliente->getDataNasc()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':rg', $cliente->getRG());

        $sql->execute();

    }

    public function getCliente($cpf)
    {
        $sql = $this->con->prepare('SELECT * FROM clientes WHERE cpf= :cpf');

        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
