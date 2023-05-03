<?php

//LOGIN INFO
//login -> taynara
//senha -> 1111

//Importacoes
require_once("requisitos.php");

//Rotas
$rotas = $_SERVER["REQUEST_URI"];
$rotas = str_replace("/papelaria/", "", $rotas);
$rotas = explode("/", $rotas);

switch($rotas[0]){
    
    case "":
        require_once("models/signin_model.php");
        break;

    case "home":
        require_once("models/home_model.php");
        break;

    case "listar":
        require_once("models/listar_model.php");
        break;

    case "pesquisar":
        require_once("models/pesquisar_model.php");
        break;

    case "cadastrar":
        require_once("models/cadastrar_model.php");
        break;

    case "tabela-editar":
        require_once("models/tabela_editar_model.php");
        break;

    case "editar":
        require_once("models/editar_model.php");
        break;

    case "tabela-deletar":
        require_once("models/tabela_deletar_model.php");
        break;
    
    case "deletar":
        require_once("models/deletar_model.php");
        break;

    case "tabela-vender":
        require_once("models/tabela_vender_model.php");
        break;

    case "vender":
        require_once("models/vender_model.php");
        break;

    case "sair":
        require_once("models/sair_model.php");
        break;

    default:
        require_once("models/404_model.php");
        break;
}

?>