<?php
//Importacoes
require_once("requisitos.php");

//VERIFICAÇÃO DE SENHA E LOGIN INSERIDOS
$form = isset($_POST["login"]) && isset($_POST["senha"]);

if ($form) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if (fazerLogin($login, $senha)) {
        header("Location: home");
        exit();
    }
}

//PAGINA INICIAL DO LOGIN

require_once("templates/header.php");

require_once("views/signin_view.php");

require_once("templates/footer.php");

?>