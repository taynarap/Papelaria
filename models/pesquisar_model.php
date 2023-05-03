<?php

// PESQUISAR PRODUTO POR ID

require_once("requisitos.php");

estaLogado();

$produtos = getTodosProdutos();

if (isset($_POST["codigo"])) {

    $codigo = $_POST["codigo"];

    $produto_especifico = getProdutoID($codigo);
}

require_once("templates/header.php");

require_once("views/pesquisar_view.php");

require_once("templates/footer.php");


?>