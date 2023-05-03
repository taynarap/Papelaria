<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4">

                <p class="titulo">DELETAR</p>

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
                                <a href="<?= $url_base; ?>deletar/<?= $p["id"] ?>">
                                    <button>DELETAR</button>
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                </table>
                <?php require_once("templates/paginacao.php"); ?>
            </div>
        </div>
    </div>
</main>