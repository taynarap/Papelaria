<?php

//LISTAR TODOS OS PRODUTOS COM ORDER BY

require_once("requisitos.php");

estaLogado();

$produtos = selectSQL("SELECT * FROM produtos");
$form = isset($_POST["coluna"]) && isset($_POST["ordem"]);

if($form){
    $produtos = selectSQL("SELECT * FROM produtos ORDER BY $_POST[coluna] $_POST[ordem]");
}

require_once("templates/header.php");

require_once("views/listar_view.php");

require_once("templates/footer.php");

?>