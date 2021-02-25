<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Imóveis - Encontre sua casa, ou seu apartamento aqui</title>

    <!-- Bootstrap CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
    <header>
        <nav id="navegacao" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                <img class="image-logo" src="../images/favicon.png" href="index.php" alt="Imagem da logo">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="/pages/index-anunciar-imoveis.php">Anunciar Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comprar Imóvel</a>
                        </li>
                    </ul>
                    <a class="navbar-text" href="pages/index-login.php">Entrar ou Cadastrar</a>
                    <!-- Provavelmente mudar essa tag para button -->
                </div>
            </div>
        </nav>
    </header>

    <h4>Seja bem-vindo, Luís Lucilandio! Organize e visualize seus dados.</h4><br>

    <div class="card" style="background-color: #87CEEB; width: 18rem; margin-left: 5%; margin-top: 5%;">
        <div class="card-header" style="text-align: center;">
            Total de Anúncios
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item" style="text-align: center;">5</li>
        </ul>
    </div>


    <div class="card" style="background-color: #98FB98; width: 25rem; margin-left: 5%; margin-top: 5%;">
        <div class="card-header" style="text-align: center;">
            Meus Anúncios
        </div>
        <ul class="list-group list-group-flush" style="">
            <li class="list-group-item">
                Imóvel 1 
                <a href="#" class="btn btn-success btn-sm" style="float: right; margin-left: 5rem;">Detalhes</a>
            </li>
            <li class="list-group-item">
                Imovel 2
                <a href="#" class="btn btn-success btn-sm" style="float: right; margin-left: 5rem;">Detalhes</a>
            </li>
            <li class="list-group-item">
                Imovel 3
                <a href="#" class="btn btn-success btn-sm" style="float: right; margin-left: 5rem;">Detalhes</a>
            </li>
        </ul>
    </div>
    <br><br>




</body>
</html>
