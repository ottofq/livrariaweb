<?php

require_once '../model/autor.php';
require_once '../dao/autorDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $autor    = new Autor($_REQUEST['txtNomeAutor'], $_REQUEST['txtEmailAutor'], $_REQUEST['txtDataNascAutor']);
    $autorDAO = new AutorDAO();

    $autorDAO->incluirAutor($autor);

    header("Location:controllerAutor.php?opcao=2");
}
if ($opcao === 2) {
    $autorDAO = new AutorDAO();
    $lista    = $autorDAO->getAutores();
    session_start();
    $_SESSION['ListaAutores'] = $lista;
    header("Location:../views/autor/exibirAutores.php");
}

if ($opcao === 3) {
    $id       = (int) $_REQUEST['id'];
    $autorDAO = new AutorDAO();
    $autor    = $autorDAO->getAutor($id);
    session_start();
    $_SESSION['Autor'] = $autor;
    header("Location:../views/autor/atualizarAutores.php");
}

if ($opcao === 4) {
    $autorDAO = new AutorDAO();
    $autorDAO->excluirAutor($_REQUEST['id']);
    header("Location:controllerAutor.php?opcao=2");

}
if ($opcao === 5) {
    $autorDAO = new AutorDAO();
    $autor    = new Autor($_REQUEST['txtNomeAutor'], $_REQUEST['txtEmailAutor'], $_REQUEST['txtDataNascAutor']);
    $autor->setId($_REQUEST['idAutor']);
    $autorDAO->atualizarAutores($autor);
    header("Location:controllerAutor.php?opcao=2");
}
