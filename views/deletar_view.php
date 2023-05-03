<main>
    <div class="container-fluid caixa">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 pb-4 text-center">

                <?php if(!isset($_POST["apagar"])): ?>

                <form action="" method="POST">

                    <p class="titulo">Tem certeza que desejas apagar o item (<?= $id; ?>)?</p>

                    <button name="apagar" value="<?= $id; ?>">SIM</button>

                    <a href="<?= $url_base; ?>tabela-deletar">
                        <button type="button">NÃO</button>
                    </a>

                </form>

                <?php else: ?>

                    <p class="titulo">Produto apagado com sucesso!</p>

                    <a href="<?= $url_base; ?>tabela-deletar">
                        <button>VOLTAR</button>
                    </a>

                <?php endif; ?>

            </div>
        </div>
    </div>
</main>