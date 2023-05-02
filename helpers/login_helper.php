<?php

//LOGIN
function fazerLogin($login, $senha)
{

    $usuario = selectSQLUnico("SELECT * FROM usuarios WHERE login='$login'");

    if (!empty($usuario)) {
        if (password_verify($senha, $usuario["senha"])) {
            session_start();
            $_SESSION["usuario"] = $usuario;

            novoAcesso($usuario["id"]);

            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function estaLogado()
{
    session_start();
    if (!isset($_SESSION["usuario"])) {
        header("Location: index.php");
        exit();
    }
}

function logout()
{
    session_start();
    session_destroy();
}
