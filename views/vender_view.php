<main>
    <div class="container-fluid caixa">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 pb-4 text-center">

                <?php if (!isset($_POST["vender"])) : ?>

                    <p class="titulo">VENDER</p>
                    <form action="" method="POST">
                        <table class="table mb-4">

                            <tr>
                                <?php foreach ($produtos[0] as $chave => $p) : ?>
                                    <th><?= $chave; ?></th>
                                <?php endforeach; ?>
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
                                    <input class="w-100" type="number" name="venda_atual" min="1" max="<?= $produto_especifico["quantidade"]; ?>" placeholder="Quantidade" required="required">
                                </td>
                            </tr>

                        </table>
                    
                        <button name="vender" value="<?= $id; ?>">VENDER</button>
                    </form>
                    <?php else : ?>

                        <p class="titulo">Produto vendido com sucesso!</p>

                        <a href="<?= $url_base; ?>tabela-vender">
                            <button>VOLTAR</button>
                        </a>

                    <?php endif; ?>
            </div>
        </div>
    </div>
</main>