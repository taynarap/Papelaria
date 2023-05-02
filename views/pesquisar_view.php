<?php
require_once("requisitos.php");

estaLogado();

if(isset($_POST["codigo"])) {

    $codigo = $_POST["codigo"];

    $produto_especifico = selectSQLUnico("SELECT * FROM produtos WHERE id=$codigo");
}

?>

<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">

                <p class="login-titulo">PESQUISAR</p>

                <form action="" method="POST">
                        <input type="text" name="codigo" placeholder="Código" require="required">
                        <br>
                        <input class="mt-4 mb-3" type="submit" value="PESQUISAR">
                </form>


                <?php if (isset($produto_especifico["id"])): ?>

                    <table class="table mb-4">
                        
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
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
                        </tr>

                    </table>

                <?php elseif(isset($_POST["codigo"]) && empty($produto_especifico["id"])): ?>

                    <p class="mt-4 text-danger">Produto (<?= $codigo; ?>) não encontrado!</p>

                <?php endif; ?>
            </div>
        </div>
    </div>
</main>