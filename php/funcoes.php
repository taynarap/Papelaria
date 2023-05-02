<?php

//LOGIN
function fazerLogin($login, $senha){

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE login='$login'");

    if(!empty($usuario)){
        if(password_verify($senha, $usuario["senha"])){
            session_start();
            $_SESSION["usuario"] = $usuario;
            
            novoAcesso($usuario["id"]);

            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }

}

function estaLogado(){
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location: index.php");
        exit();
    }
}

function logout(){
    session_start();
    session_destroy();
}

//ACESSOS

function novoAcesso($id_usuario){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (data, id_usuario) VALUES ('$data_atual', '$id_usuario')");

}

function getNomeUsuarioID($id_usuario){
    return selectSQLUnico("SELECT login FROM usuarios WHERE id='$id_usuario'")["login"];
}

function getTodosAcessosID($id_usuario){
    return selectSQL("SELECT data FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC");
}

function getTodosAcessos(){
    return selectSQL("SELECT data,id_usuario FROM acessos ORDER BY id DESC");
}

function getUltimoAcesso($id_usuario){
    $ultimo = selectSQLUnico("SELECT data FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (!empty($ultimo)) ? $ultimo["data"] : "---";
}
