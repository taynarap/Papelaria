<?php

require_once("requisitos.php");

estaLogado();

if(isset($_POST['id'])){

    $idProduto = $_POST['id'];

    $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$idProduto");

} elseif(isset($_POST["apagar"])) {
    iduSQL("DELETE FROM produtos WHERE id='$_POST[apagar]'");
} 

require_once("templates/header.php");

require_once("views/deletar_view.php");

require_once("templates/footer.php");


?>