<?php

require_once '../classes/modelo.php';
require_once '../dao/autorDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $autor    = new Autor($_REQUEST['txtNomeAutor'], $_REQUEST['txtEmailAutor'], $_REQUEST['txtDataNascAutor']);
    $autorDAO = new AutorDAO();

    $autorDAO->incluirAutor($autor);

    header("Location:controlerAutor.php?opcao=2");
}
if ($opcao === 2) {
    $autorDAO = new AutorDAO();
    $lista    = $autorDAO->getAutores();
    session_start();
    $_SESSION['ListaAutores'] = $lista;
    header("Location:../exibirAutores.php");
}
