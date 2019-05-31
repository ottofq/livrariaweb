<?php
require_once '../model/publicacao.php';
require_once '../dao/publicacaoDAO.php';

$opcao = (int) $_REQUEST['opcao'];

if ($opcao === 1) {
    $id            = (int) $_REQUEST["id"];
    $publicacaoDAO = new PublicacaoDAO();
    $publicacao    = $publicacaoDAO->getPublicacao($id);
    session_start();
    if (!isset($_SESSION["Carrinho"])) {
        $carrinho = array();
    } else {
        $carrinho = $_SESSION["Carrinho"];
    }
    $carrinho[]           = $publicacao;
    $_SESSION["Carrinho"] = $carrinho;
    header("Location:../views/carrinho/exibirCarrinho.php");
}
if ($opcao === 2) {
    $index = (int) $_REQUEST["index"];
    session_start();
    $carrinho = $_SESSION["Carrinho"];
    unset($carrinho[$index]);
    sort($carrinho);
    $_SESSION["Carrinho"] = $carrinho;
    header("Location:controllerCarrinho.php?opcao=3");
}
if ($opcao === 3) {
    session_start();
    if (!isset($_SESSION["Carrinho"]) || sizeof($_SESSION["Carrinho"]) == 0) {
        header("Location:../views/carrinho/exibirCarrinho.php?status=1");
    } else {
        header("Location:../views/carrinho/exibirCarrinho.php");
    }
}
