<?php

//ACESSOS

function novoAcesso($id_usuario){

    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO acessos (data, id_usuario) VALUES ('$data_atual', '$id_usuario')");
}

function getUltimoAcesso($id_usuario){
    $ultimo = selectSQLUnico("SELECT data FROM acessos WHERE id_usuario='$id_usuario' ORDER BY id DESC LIMIT 2 OFFSET 1");
    return (!empty($ultimo)) ? $ultimo["data"] : "---";
}
