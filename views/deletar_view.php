<?php
require_once("requisitos.php");

estaLogado();

if(isset($_POST['id'])){

    $idProduto = $_POST['id'];

    $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$idProduto");

} elseif(isset($_POST["apagar"])) {
    iduSQL("DELETE FROM produtos WHERE id='$_POST[apagar]'");
} 

?>

<main>
    <div class="container-fluid caixa">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 pb-4 text-center">

                <?php if(isset($_POST['id'])): ?>
                    <form action="" method="POST">
        
                        <p class="titulo">Tem certeza que desejas apagar o item (<?= $idProduto; ?>)?</p>

                        <button name="apagar" value="<?= $idProduto; ?>">SIM</button>

                        <a href="tabela_deletar.php">
                            <button type="button">NÃO</button>
                        </a>

                    </form>
                    
                    
                <?php elseif(isset($_POST["apagar"])): ?>

                        <p class="titulo">Produto apagado com sucesso!</p>

                        <a href="tabela_deletar.php">
                            <input type="submit" value="VOLTAR">
                        </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>