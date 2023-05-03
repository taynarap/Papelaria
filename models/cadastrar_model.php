<?php

// Inserir Novos Produtos

require_once("requisitos.php");

estaLogado();

$form = isset($_POST["nome"]) && isset($_POST["preco"]) && isset($_POST["quantidade"]);

if($form){
    $resultado = selectSQLUnico("SELECT * FROM produtos WHERE nome='$_POST[nome]'");
    if(empty($resultado)){
        iduSQL("INSERT INTO produtos (nome, preco, quantidade) VALUES ('$_POST[nome]', '$_POST[preco]', '$_POST[quantidade]')");
    }
}

require_once("templates/header.php");

require_once("views/cadastrar_view.php");

require_once("templates/footer.php");


?>