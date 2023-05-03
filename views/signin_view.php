<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">

                <h3>Login</h3>

                <?php if(isset($_POST["login"])) : ?>
                    <p class="text-danger">Login inválido, tente novamente.</p>
                <?php endif; ?>


                <form action="" method="POST">

                    <input type="text" name="login" placeholder="Login" required="required">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha" required="required">
                    <br><br>
                    <input type="submit" value="ENTRAR">

                </form>
            </div>
        </div>
    </div>
</main>