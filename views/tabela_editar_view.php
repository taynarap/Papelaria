<main>

    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4">

                <p class="titulo">EDITAR</p>
                <form action="" method="POST">

                    <table class="table mb-4">

                        <tr>
                            <?php foreach ($produtos[0] as $chave => $p) : ?>
                                <th><?= $chave; ?></th>
                            <?php endforeach; ?>
                            <th>Acção</th>
                        </tr>

                        <?php foreach ($produtos as $p) : ?>

                            <tr class="text-success">

                                <?php foreach ($p as $chave => $valor) : ?>

                                    <td><?= $valor; ?><?= ($chave == "preco") ? " €" : ""; ?></td>

                                <?php endforeach; ?>

                                <td>
                                    <a href="<?= $url_base; ?>editar/<?= $p["id"] ?>">
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