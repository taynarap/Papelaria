<?php
require_once("requisitos.php");

estaLogado();

$form = isset($_POST["nomeNovo"]) && isset($_POST["precoNovo"]) && isset($_POST["quantidadeNova"]) && isset($_POST["editar"]);

if(isset($_POST['id'])){

    $idProduto = $_POST['id'];

    $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$idProduto");

} elseif($form) {

    $idProduto = $_POST['editar'];
    $nome = $_POST["nomeNovo"];
    $preco = $_POST["precoNovo"];
    $quantidade = $_POST["quantidadeNova"];

    iduSQL("UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade' WHERE id='$idProduto'");
}

?>

<main>
    <div class="container-fluid caixa">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 pb-4 text-center">
                <?php if(empty($form)): ?>

                    <form action="" method="POST">         
            
                        <h3>Editar produto (<?= $idProduto; ?>)</h3>
                        <br>
                        <input type="hidden" name="editar" value="<?= $idProduto; ?>">
                        <input type="text" name="nomeNovo" value="<?= $produto_especifico["nome"]; ?>">
                        <br><br>
                        <input type="number" name="precoNovo" step="0.01" value="<?= $produto_especifico["preco"]; ?>">
                        <br><br>
                        <input type="number" name="quantidadeNova" value="<?= $produto_especifico["quantidade"]; ?>">
                        <br><br>
                        <input type="submit" value="EDITAR">

                    </form>

                <?php elseif(isset($_POST["editar"])): ?>

                        <p class="titulo">Produto editado com sucesso!</p>

                        <a href="tabela-editar">
                            <button>VOLTAR</button>
                        </a>

                <?php endif; ?>

            </div>
        </div>
    </div>

</main>