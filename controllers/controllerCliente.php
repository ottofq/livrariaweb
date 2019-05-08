<?php

require_once '../model/cliente.php';
require_once '../dao/clienteDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $cliente    = new Cliente($_REQUEST['txtCPFCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtLogradouroCliente'], $_REQUEST['txtCidadeCliente'], $_REQUEST['txtEstadoCliente'], $_REQUEST['txtCEPCliente'], $_REQUEST['txtDataNascCliente'], $_REQUEST['txtEmailCliente'], $_REQUEST['txtSenhaCliente'], $_REQUEST['txtRGCliente']);
    $clienteDAO = new ClienteDAO();

    $clienteDAO->incluirCliente($cliente);

    header("Location:controllerCliente.php?opcao=2");
}
if ($opcao === 2) {
    $clienteDAO = new ClienteDAO();
    $lista      = $clienteDAO->getClientes();
    session_start();
    $_SESSION['ListaClientes'] = $lista;
    header("Location:../views/cliente/exibirClientes.php");
}

if ($opcao === 3) {
    $cpf        = (int) $_REQUEST['cpf'];
    $clienteDAO = new ClienteDAO();
    $cliente    = $clienteDAO->getCliente($cpf);
    session_start();
    $_SESSION['Cliente'] = $cliente;
    header("Location:../views/cliente/atualizarClientes.php");
}

if ($opcao === 4) {
    $clienteDAO = new ClienteDAO();
    $clienteDAO->excluirCliente($_REQUEST['cpf']);
    header("Location:controllerCliente.php?opcao=2");

}
if ($opcao === 5) {
    $clienteDAO = new ClienteDAO();
    $cliente    = new Cliente($_REQUEST['txtCPFCliente'], $_REQUEST['txtNomeCliente'], $_REQUEST['txtLogradouroCliente'], $_REQUEST['txtCidadeCliente'], $_REQUEST['txtEstadoCliente'], $_REQUEST['txtCEPCliente'], $_REQUEST['txtDataNascCliente'], $_REQUEST['txtEmailCliente'], $_REQUEST['txtSenhaCliente'], $_REQUEST['txtRGCliente']);
    $cliente->setCPF($_REQUEST['cpfCliente']);
    $clienteDAO->atualizarClientes($cliente);
    header("Location:controllerCliente.php?opcao=2");
}
