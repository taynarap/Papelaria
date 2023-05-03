<?php

//PAGINA PARA VENDER PRODUTOS

require_once("requisitos.php");

estaLogado();

$id = (empty($rotas[1])) ? NULL : $rotas[1];

$produtos = getTodosProdutos();

$produto_especifico = getProdutoID($id);

require_once("templates/header.php");

require_once("views/vender_view.php");

require_once("templates/footer.php");

$form = isset($_POST["vender"]) && isset($_POST["venda_atual"]);

if (isset($_POST['id'])) {

    $idProduto = $_POST['id'];
    
} elseif ($form) {

    $idProduto = $_POST['vender'];
    $quantidade_venda = $_POST["venda_atual"];

    iduSQL("UPDATE produtos SET quantidade=quantidade-'$quantidade_venda' WHERE id='$idProduto'");
}

?>