<?php
require_once("requisitos.php");

estaLogado();

$produtos = getTodosProdutos();

//Paginacao

$pagina_atual = (isset($_POST["pagina_atual"])) ? $_POST["pagina_atual"] : 1;

$total_elementos = selectSQLUnico("SELECT Count(*) AS total FROM produtos")["total"];

$elementos_por_pagina = 5;

$total_paginas = ceil($total_elementos / $elementos_por_pagina);

$total_a_saltar = (($pagina_atual - 1) * $elementos_por_pagina);

$produtos = selectSQL("SELECT * FROM produtos LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

?>
<main>

    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4">

                <p class="titulo">EDITAR</p>
                <form action="editar" method="POST">

                    <table class="table mb-4">

                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Acções</th>
                        </tr>

                        <?php foreach ($produtos as $p) : ?>

                            <tr class="text-success">

                                <?php foreach ($p as $chave => $valor) : ?>

                                    <td><?= $valor; ?><?= ($chave == "preco") ? " €" : ""; ?></td>

                                <?php endforeach; ?>

                                <td>
                                    <input type="hidden" name="id" value="<?= $p["id"]; ?>">
                                    <a href="<?= $url_base; ?>editar/<?= $p["id"]; ?>">
                                        <button>EDITAR</button>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </table>
                </form>
                <?php require_once("templates/paginacao.php"); ?>
            </div>
        </div>
    </div>
</main>