<?php
require_once("requisitos.php");

estaLogado();

$data_acesso = getUltimoAcesso($_SESSION["usuario"]["id"]);

?>
<main>
    <div class="container-fluid caixa">

        <div class="row d-flex justify-content-center">

            <div class="col-12 mt-4 p-4">
                <p class="login-titulo">Bem-vindo <?= ucfirst($_SESSION["usuario"]["login"]); ?>!</p>

                <p>Data do último acesso: <?= $data_acesso; ?></p>
            </div>
        </div>
        
    </div>
</main>