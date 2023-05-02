<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelaria <?= ($rotas[0] != "") ? " - " . ucfirst($rotas[0]) : ""; ?></title>

    <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
            crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href= <?= $url_base . "/css/style.css"; ?>>
</head>
<body class="text-center">

    <header class="mb-4">
        <div class="container-fluid caixa mt-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <p class="header-titulo p-5 mb-0">SISTEMA DA PAPELARIA 2021</p>
                </div>
            </div>

            <div class="row">
                <nav class="navbar navbar-expand-md">
                    <div class="container justify-content-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "home") ? "active" : ""; ?>" aria-current="page" href="home">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  <?= ($rotas[0] == "listar") ? "active" : ""; ?>" href="listar">LISTAR PRODUTOS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "pesquisar") ? "active" : ""; ?>" href="pesquisar">PESQUISAR CÓDIGO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "cadastrar") ? "active" : ""; ?>" href="cadastrar">CADASTRAR PRODUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "tabela-editar") ? "active" : ""; ?>" href="tabela-editar">EDITAR PRODUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "deletar") ? "active" : ""; ?>" href="tabela-deletar">DELETAR PRODUTO</a>
                                </li>
                                <li class="nav-item">
<<<<<<< HEAD
                                    <a class="nav-link <?= ($rotas[0] == "venda") ? "active" : ""; ?>" href="tabela-vender">REGISTAR VENDAS</a>
=======
                                    <a class="nav-link <?= ($rotas[0] == "venda") ? "active" : ""; ?>" href="tabela-venda">REGISTAR VENDAS</a>
>>>>>>> 20bf98ba731b0deb2370636d16a03355778430f5
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[0] == "sair") ? "active" : ""; ?>" href="sair">SAIR</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>      
    </header>
