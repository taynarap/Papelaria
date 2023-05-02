<?php
require_once("requisitos.php");

estaLogado();

//ORDER BY
$produtos = selectSQL("SELECT * FROM produtos");
$form = isset($_POST["coluna"]) && isset($_POST["ordem"]);

if($form){
    $produtos = selectSQL("SELECT * FROM produtos ORDER BY $_POST[coluna] $_POST[ordem]");
}

?>

<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">

                <p class="login-titulo">ORDEM DA LISTA</p>

                <form action="" method="POST">

                    <label class="text-dark" for="coluna">Coluna: </label>

                    <select class="mb-3" name="coluna" required="required">
                        <option value="id">ID</option>
                        <option value="nome">NOME</option>
                        <option value="preco">PREÇO</option>
                        <option value="quantidade">QUANTIDADE</option>
                    </select>

                    <br>
                    
                    <label for="ASC" class="text-dark ordenar me-3">Ascendente
                    <input type="radio" name="ordem" value="ASC" required="required" checked id="ASC">
                    </label>
                    <label for="DESC" class="text-dark ordenar">Descendente
                        <input type="radio" name="ordem" value="DESC" required="required" id="DESC">
                    </label>
                    <br>
                    <input class="mt-3 mb-4" type="submit" value="LISTAR">
                    <br>

                </form>

                <table class="table mb-4">
                    
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                    </tr>
                
                    <?php foreach($produtos as $p): ?>

                        <tr class="text-success">
                            <?php foreach($p as $chave => $valor): ?>

                            <td><?= $valor; ?><?= ($chave == "preco") ? " €" : ""; ?></td>

                        <?php endforeach; ?>

                        </tr>

                    <?php endforeach; ?>
                    
                </table>
            </div>
        </div>
    </div>
    
</main>