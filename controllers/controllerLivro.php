<?php

require_once '../model/livro.php';
require_once '../dao/livroDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $livro    = new Livro($_REQUEST['txtISBNLivro'], $_REQUEST['txtTituloLivro'], $_REQUEST['txtEdicaoLivro'], $_REQUEST['txtAnoLivro'], $_REQUEST['txtDescricaoLivro']);
    $livroDAO = new LivroDAO();

    $livroDAO->incluirLivro($livro);

    header("Location:controllerLivro.php?opcao=2");
}
if ($opcao === 2) {
    $livroDAO = new LivroDAO();
    $lista    = $livroDAO->getLivros();
    session_start();
    $_SESSION['ListaLivros'] = $lista;
    header("Location:../views/livro/exibirLivros.php");
}

if ($opcao === 3) {
    $isbn     = (int) $_REQUEST['isbn'];
    $livroDAO = new LivroDAO();
    $livro    = $livroDAO->getLivro($isbn);
    session_start();
    $_SESSION['Livro'] = $livro;
    header("Location:../views/livro/atualizarLivro.php");
}

if ($opcao === 4) {
    $livroDAO = new LivroDAO();
    $livroDAO->excluirLivro($_REQUEST['isbn']);
    header("Location:controllerLivro.php?opcao=2");

}
if ($opcao === 5) {
    $livroDAO = new LivroDAO();
    $livro    = new Livro($_REQUEST['isbnLivro'], $_REQUEST['txtTituloLivro'], $_REQUEST['txtEdicaoLivro'], $_REQUEST['txtAnoLivro'], $_REQUEST['txtDescricaoLivro']);
    $livro->setIsbn($_REQUEST['isbnLivro']);
    $livroDAO->atualizarLivro($livro);
    header("Location:controllerLivro.php?opcao=2");
}
