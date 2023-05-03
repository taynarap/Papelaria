<?php
//PRODUTOS
function getProdutoID($id){
    return selectSQLUnico("SELECT * FROM produtos WHERE id='$id'");
}

function getTodosProdutos(){
    return selectSQL("SELECT * FROM produtos");
}