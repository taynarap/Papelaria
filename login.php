<?php
//Importacoes
require_once("requisitos.php");

$form = isset($_POST["login"]) && isset($_POST["senha"]);

if($form){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(fazerLogin($login, $senha)){
        header("Location: home");
        exit();
    }else{
        header("Location: index.php");
        exit();
    }
}

?>