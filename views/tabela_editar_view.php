<?php
require_once("requisitos.php");

estaLogado();

$produtos = selectSQL("SELECT * FROM produtos");

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
<<<<<<< HEAD
                <form action= "editar?id= <?= $p["id"]; ?>" method="POST">
                
=======
                <form action="" method="POST">
>>>>>>> 20bf98ba731b0deb2370636d16a03355778430f5
                    <table class="table mb-4">
                        
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Acções</th>
                        </tr>
                        
                        <?php foreach($produtos as $p): ?>

                            <tr class="text-success">
                                
                                    <td> <?= $p["id"]; ?></td>

                                    <td> <?= $p["nome"]; ?></td>
<<<<<<< HEAD
=======

                                    <td> <?= $p["preco"] . " &euro;"; ?> </td>

                                    <td> <?= $p["quantidade"]; ?> </td>

                                    <td>
                                        <a href="editar_view.php?id=<?= $p["id"]; ?>"><button>EDITAR</button></a>
                                    </td>
                            </tr>

                        <?php endforeach; ?>
                        
                    </table>
                </form>
                <div class="mb-4">
                    <form action="" method="POST">
                        <button class="btn btn-success rounded" style="display: <?= ($pagina_atual <= 1) ? "none" : ""?>;" name="pagina_atual" value="<?=($pagina_atual > 1) ? ($pagina_atual -1) : 1;?>" <?=($pagina_atual <= 1) ? "disabled" : "";?>>&larr;</button>
>>>>>>> 20bf98ba731b0deb2370636d16a03355778430f5

                                    <td> <?= $p["preco"] . " &euro;"; ?> </td>

                                    <td> <?= $p["quantidade"]; ?> </td>

                                    <td>
                                        <input type="hidden" name="id" value="<?= $p["id"]; ?>">
                                        <input type="submit" value="EDITAR">
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