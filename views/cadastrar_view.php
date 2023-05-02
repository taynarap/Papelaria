<?php 
require_once("requisitos.php");

estaLogado();

// Inserir Novos Produtos
$form = isset($_POST["nome"]) && isset($_POST["preco"]) && isset($_POST["quantidade"]);

if($form){
    $resultado = selectSQLUnico("SELECT * FROM produtos WHERE nome='$_POST[nome]'");
    if(empty($resultado)){
        iduSQL("INSERT INTO produtos (nome, preco, quantidade) VALUES ('$_POST[nome]', '$_POST[preco]', '$_POST[quantidade]')");
    }
}

?>

<main>
    <div class="container caixa">
        <div class="row justify-content-center">
            <div class="col-6 mt-4 p-4">

            <?php if(empty($form)): ?>

                <p class="titulo">CADASTRAR</p>

                <form action="" method="POST">
                    <input type="text" name="nome" placeholder="Nome" required="required">
                    <br><br>
                    <input type="number" name="preco" step="0.01" min="0" placeholder="Preço" required="required">
                    <br><br>
                    <input type="number" name="quantidade" min="0" placeholder="Quantidade" required="required">
                    <br><br>
                    <input type="submit" value="CADASTRAR">
                </form>

            <?php elseif(!empty($resultado)): ?>

                <p class="titulo text-danger">Um produto com esse nome já existe!</p>

                <a href="cadastrar">
                    <input type="submit" value="VOLTAR">
                </a>

            <?php else: ?>

                <p class="titulo">Produto cadastrado com sucesso!</p>

                <a href="cadastrar">
                    <input type="submit" value="VOLTAR">
                </a>

            <?php endif; ?>

            </div>
        </div>
    </div>
</main>