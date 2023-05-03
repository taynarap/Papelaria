<?php

//TABELA DE TODOS OS PRODUTOS + BOTAO EDITAR.  ESTA PAGINA IRA REDERECIONAR O USUARIO PARA EDITAR_MODEL.PHP

require_once("requisitos.php");

estaLogado();

$produto = getTodosProdutos();

//Paginacao

$pagina_atual = (isset($_POST["pagina_atual"])) ? $_POST["pagina_atual"] : 1;

$total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM produtos")["total"];

$elementos_por_pagina = 5;

$total_paginas = ceil($total_elementos / $elementos_por_pagina);

$total_a_saltar = (($pagina_atual - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

require_once("templates/header.php");

require_once("views/tabela_editar_view.php");

require_once("templates/footer.php");

?>