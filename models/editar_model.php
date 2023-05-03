<?php

//EDIÇÃO DE PRODUTO

require_once("requisitos.php");

estaLogado();

$id = (empty($rotas[1])) ? NULL : $rotas[1];

$produto_especifico = getProdutoID($id);

require_once("templates/header.php");

require_once("views/editar_view.php");

require_once("templates/footer.php");

$form = isset($_POST["nomeNovo"]) && isset($_POST["precoNovo"]) && isset($_POST["quantidadeNova"]) && isset($_POST["editar"]);

if (isset($_POST['id'])) {

    $idProduto = $_POST['id'];

} elseif ($form) {

    $idProduto = $_POST['editar'];
    $nome = $_POST["nomeNovo"];
    $preco = $_POST["precoNovo"];
    $quantidade = $_POST["quantidadeNova"];

    iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade' WHERE id='$idProduto'");

}

?>