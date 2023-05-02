<?php
require_once("requisitos.php");

estaLogado();

$form = isset($_POST["vender"]) && isset($_POST["venda_atual"]);

if(isset($_POST['id'])){
    $idProduto = $_POST['id'];
    $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$idProduto");
}

if($form){
    $idProduto = $_POST['vender'];
    $quantidade_venda = $_POST["venda_atual"];

    iduSQL("UPDATE produtos SET quantidade=quantidade-'$quantidade_venda' WHERE id='$idProduto'");
}
?>

<main>
    <div class="container-fluid caixa">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 pb-4 text-center">

                <?php if(empty($form)): ?>
                    <p class="titulo">VENDER</p>
                            
                            <table class="table mb-4">
                            
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Acção</th>
                            </tr>
                        
                            <tr class="text-success">
                                
                                <td>
                                    <?= $produto_especifico["id"]; ?>
                                </td>

                                <td>
                                    <?= $produto_especifico["nome"]; ?>
                                </td>

                                <td>
                                    <?= $produto_especifico["preco"]; ?> €
                                </td>

                                <td>
                                    <?= $produto_especifico["quantidade"]; ?>
                                </td>

                                <td>                              
                                    <input type="number" name="venda_atual" min="1" max="<?=$produto_especifico["quantidade"]; ?>" placeholder="Quantidade" required="required"> 
                                </td>
                            </tr>

                        </table>

                        <button name="vender" value="<?= $idProduto; ?>">VENDER</button>

                <?php elseif(isset($_POST["vender"])): ?>

                    <p class="titulo">Produto vendido com sucesso!</p>

                    <a href="venda">
                        <button>VOLTAR</button>
                    </a>

                <?php endif; ?>
            </div>
        </div>
    </div>
</main>