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

    <div class="card" style="width: 18rem; margin-left: 10%; margin-top: 10%;">
    <div class="card-header">
        Total de Anuncios
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="text-align: center;">12</li>
    </ul>
    </div>


    <div class="card" style="width: 18rem; margin-left: 10%; margin-top: 10%;">
    <div class="card-header">
        Meus Anuncios
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            Imovel 1 
            <a href="#" class="btn btn-success btn-sm" style="margin-left: 5rem;">Detalhes</a>
        </li>
        <li class="list-group-item">
            Imovel 2
            <a href="#" class="btn btn-success btn-sm" style="margin-left: 5rem;">Detalhes</a>
        </li>
        <li class="list-group-item">
            Imovel 3
            <a href="#" class="btn btn-success btn-sm" style="margin-left: 5rem;">Detalhes</a>
        </li>
    </ul>
    </div>




</body>
</html>
