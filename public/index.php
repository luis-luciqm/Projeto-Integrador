<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Imóveis - Encontre sua casa, ou seu apartamento aqui</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <!-- INICIO NAV-BAR -->
    <header>
        <nav id="navegacao" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                <img class="image-logo" src="images/favicon.png" href="index.php" alt="Imagem da logo">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="menu" class="navbar-toggler-icon">MENU</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/index-anunciar-imoveis.php">Anunciar Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/index-imoveis-disponiveis.php">Imóveis Disponíveis</a>
                        </li>
                    </ul>

                    <a class="navbar-text" href="pages/index-login.php">Entrar ou Cadastrar</a>
                    <!-- Provavelmente mudar essa tag para button -->
                </div>
            </div>
        </nav>
    </header>
    <!-- FIM NAV-BAR -->

    <!-- INICIO CAROUSEL -->
    <h4>Alugue, Compre e Anuncie seu Imóvel aqui!!</h4><br>
    <div id="Carrossel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Se você busca um apartamento para alugar, é aqui que encontra-se!</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Pau dos Ferros/RN</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/carrossel.jpg" class="d-block w-100" alt="Imagem do Carrossel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Interior Imóveis</h5>
                        <p>Anuncie, Alugue, ou compre. Quem decide é você!</p>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- FIM CAROUSEL -->
        <br>
        <hr/>
        <!-- INICIO DESTAQUES DE LOCALIZAÇÃO-->
        <h4 id="location" class="form-label">IMÓVEIS PRÓXIMOS A SUA LOCALIZAÇÃO!</h4>
        <?php for($i = 0; $i < 4; $i++){ ?>
            <div class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="images/card1.jpg" class="card-img-top" alt="imagens Pŕoximos a sua Localização">
                <div class="card-body">
                    <b><h5 class="card-title">Apartamento</h5></b>
                    <p class="card-text">Apartamento com 3 quartos, sala de estar, 2 banheiros e cozinha.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Preço: $300,000</li>
                    <li class="list-group-item">Local: Praça da Matriz, Pau dos Ferros - RN</li>
                </ul>
                <div class="card-body">
                    <input type="submit" id="botoes-cards" class="fadeIn fourth zero-raduis" value="Ver Imóvel">
                </div>
            </div>
        <?php } ?>
    </div>
    <!--FIM DESTAQUES DE LOCALIZAÇÃO-->
    
    <!-- Inicio abrir chamado -->
    <h2 id="solicitarButton">Não encontrou nada que procura? Faça uma solicitação!</h2>
    <form action="pages/index-solicitar.php" method="POST">
        <input type="submit" id="solicitar-imovel" class="fadeIn fourth zero-raduis" value="Solicitar Imóvel">
    </form>
    <!-- FIM abrir chamado -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg"> <!-- caso não for necessário esse tamanho, retirar modal-lg -->
            <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title" id="staticBackdropLabel">Apartamento</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="imagem-modal-ap">
                    <img id="imagemModal" src="images/card1.jpg" class="img-thumbnail" alt="Imagem do Imóvel">
                </div>
                <div class="texto-imagem-modal">
                    <p><b>Nome do Anunciante: </b>Luis Lucilandio</p>
                    <p><b>Cidade: </b>Pau dos Ferros/RN</p>
                    <p><b>Tipo de Anúncio: </b>Aluguel</p>
                    <p><b>Descrição do Imóvel: </b>Apartamentos disponíveis, próximo ao IFRN Pau dos Ferros: 1 sala, 1 quarto, 1 banheiro.</p>
                    <p><b>Preço: </b>R$300</p>
                    <p class="alert alert-success"><b>Situação: </b>Disponível</p>
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                <div id="botoes-footer">
                    <!-- <p id="contato">Entre em Contato com <b>Luís Lucilandio</b></p> -->
                    <input type="submit" class="fadeIn fourth zero-raduis botao-footer" value="EMAIL">
                    <input type="submit" class="fadeIn fourth zero-raduis botao-footer" value="TELEFONE">
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->

    <!-- INICIO RODAPE -->
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="pages/index-alugueis-disponiveis.php">Alugueis Disponíveis</a></li>
                        <li><a href="#">Anunciar Imóveis</a></li>
                        <li><a href="#">Comprar Imóvel</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Suporte</h5>
                    <ul>
                        <li><a href="mailto:l.luis@escolar.ifrn.edu.br">l.luis@escolar.ifrn.edu.br</a></li>
                        <li><a href="mailto:leonardo.fabricio@escolar.ifr.edu.br">leonardo.fabricio@escolar.ifrn.edu.br</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Informações</h5>
                    <p> Se você deseja comprar, alugar ou vender um imovel (inacabado)...</p>
                </div>

                <div class="col-sm-3 development">
                    <h5>Desenvolvedores</h5>
                    <p><a href="https://luis-luciqm.github.io/" target="_blank">Luis Lucilandio</a></p>
                    <p><a href="https://github.com/leonardo-fabricio" target="_blank">Leonardo Fabrício</a></p>
                </div>

            </div>
        </div>
    </footer>
    <div id="fim">
        <p>©2021. All Rights Reserved. InteriorImoveis®</p>
    </div>
    <!-- FIM RODAPE -->
</body>

</html>