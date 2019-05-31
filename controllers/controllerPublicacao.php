<?php

require_once '../model/publicacao.php';
require_once '../dao/publicacaoDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 2) {
    $publicacaoDAO = new PublicacaoDAO();
    $lista         = $publicacaoDAO->getPublicacoes();
    session_start();
    $_SESSION['ListaPublicacoes'] = $lista;
    header("Location:../views/publicacao/exibirPublicacoes.php");
}

if ($opcao === 3) {
    $id       = (int) $_REQUEST['id'];
    $autorDAO = new AutorDAO();
    $autor    = $autorDAO->getAutor($id);
    session_start();
    $_SESSION['Autor'] = $autor;
    header("Location:../views/publicacao/atualizarAutores.php");
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
