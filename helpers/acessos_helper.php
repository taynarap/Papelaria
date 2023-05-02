<?php

//ACESSOS

function novoAcesso($id_usuario)
{

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (data, id_usuario) VALUES ('$data_atual', '$id_usuario')");
}

function getNomeUsuarioID($id_usuario)
{
    return selectSQLUnico("SELECT login FROM usuarios WHERE id='$id_usuario'")["login"];
}

function getTodosAcessosID($id_usuario)
{
    return selectSQL("SELECT data FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC");
}

function getTodosAcessos()
{
    return selectSQL("SELECT data,id_usuario FROM acessos ORDER BY id DESC");
}

function getUltimoAcesso($id_usuario)
{
    $ultimo = selectSQLUnico("SELECT data FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (!empty($ultimo)) ? $ultimo["data"] : "---";
}
