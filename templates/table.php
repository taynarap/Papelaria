<table class="table mb-4">

    <tr>
        <?php foreach ($produtos[0] as $chave => $p) : ?>
            <th><?= $chave; ?></th>
        <?php endforeach; ?>

        <?php if ($rotas[0] == "tabela-editar" || $rotas[0] == "tabela-deletar" || $rotas[0] == "tabela-vender") : ?>
            <th>Acção</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($produtos as $p) : ?>

        <tr class="text-success">

            <?php foreach ($p as $chave => $valor) : ?>

                <td><?= $valor; ?><?= ($chave == "preco") ? " €" : ""; ?></td>

            <?php endforeach; ?>

            <?php if ($rotas[0] == "tabela-editar") : ?>
                <td>
                    <a href="<?= $url_base; ?>editar/<?= $p["id"] ?>">
                        <button>EDITAR</button>
                    </a>
                </td>
            <?php endif; ?>

            <?php if ($rotas[0] == "tabela-deletar") : ?>
                <td>
                    <a href="<?= $url_base; ?>deletar/<?= $p["id"] ?>">
                        <button>DELETAR</button>
                    </a>
                </td>
            <?php endif; ?>

            <?php if ($rotas[0] == "tabela-vender") : ?>
                <td>
                    <a href="<?= $url_base; ?>vender/<?= $p["id"] ?>">
                        <button>VENDER</button>
                    </a>
                </td>
            <?php endif; ?>
        </tr>

    <?php endforeach; ?>

</table>