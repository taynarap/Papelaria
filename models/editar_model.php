<?php

require_once("requisitos.php");

estaLogado();

$id = (empty($rotas[1])) ? NULL : $rotas[1];

$produto = getTodosProdutos();
$produto_especifico = getProdutoID($id);

require_once("templates/header.php");

require_once("views/tabela_editar_view.php");

require_once("templates/footer.php");

if ($id) {

    $form = isset($_POST["nomeNovo"]) && isset($_POST["precoNovo"]) && isset($_POST["quantidadeNova"]) && isset($_POST["editar"]);

    if($form){
        $id = $_POST['editar'];
        $nome = $_POST["nomeNovo"];
        $preco = $_POST["precoNovo"];
        $quantidade = $_POST["quantidadeNova"];

        iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade' WHERE id='$id'");
    }
    
}

//Paginacao

$pagina_atual = (isset($_POST["pagina_atual"])) ? $_POST["pagina_atual"] : 1;

$total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM produtos")["total"];

$elementos_por_pagina = 5;

$total_paginas = ceil($total_elementos / $elementos_por_pagina);

$total_a_saltar = (($pagina_atual - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

?>