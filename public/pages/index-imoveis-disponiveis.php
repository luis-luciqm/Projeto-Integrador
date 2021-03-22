<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interior Imóveis - Encontre sua casa, ou seu apartamento aqui</title>

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body id="corpo-listagem">

    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/main.js"></script>

    <div id="anuncio-div">
        <!-- <p id="sucesso-anuncio">Seu imóvel foi anunciado com sucesso!</p> -->
    </div>
    <!-- INICIO NAV-BAR -->
    <header>
        <nav id="navegacao" class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Navbar w/ text</a> -->
                <img class="image-logo" src="../images/favicon.png" href="index.php" alt="Imagem da logo">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span id="menu" class="navbar-toggler-icon">MENU</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index.php">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-anunciar-imoveis.php">Anunciar Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index-imoveis-disponiveis.php">Imóveis Disponíveis</a>
                        </li>
                    </ul>

                    <a class="navbar-text" href="index-login.php">Entrar ou Cadastrar</a>
                    <!-- Provavelmente mudar essa tag para button -->
                </div>
            </div>
        </nav>
    </header>
    <!-- FIM NAV-BAR -->

    <!-- Inicio Imoveis disponiveis para compra -->
    <h4>Imóveis Disponíveis para Compra, e Aluguel.</h4>
    <p id="trecho">Pesquise pelo Imóvel que deseja, por: Cidade, Rua ou pelo tipo de Imóvel; Aluguel ou Venda.</p>
    <form class="form-search" method="POST" id="s" action="index-imoveis-disponiveis.php">
        <div class="input-append">
            <!-- <p>Pesquise um Imóvel</p> -->
            <input type="text" class="input-medium search-query" name="s" placeholder="Pesquisar por Rua, Cidade, Local, etc..">
            <button id="button-search" class="btn btn-outline-secondary" type="submit">Pesquisar</button>
        </div>
    </form>

    <div id="cards-compra">
        <h2 id="trecho2">Resultados da busca de (textoDigitado)</h2>
        <div class="container">
            <?php for($i = 0; $i < 8; $i++){ ?>
                <div class="card" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="../images/card1.jpg" class="card-img-top" alt="imagens Pŕoximos a sua Localização">
                    <div class="card-body">
                        <b><h5 class="card-title">Apartamento</h5></b>
                        <p class="card-text">Apartamento com 3 quartos, sala de estar, 2 banheiros e cozinha.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Preço: R$300,000</li>
                        <li class="list-group-item">Local: Praça da Matriz, Pau dos Ferros - RN</li>
                        <li class="list-group-item">Tipo: <b>Compra</b></li>
                    </ul>
                    <div class="card-body">
                        <input type="submit" id="botoes-cards" class="fadeIn fourth zero-raduis" value="Ver Imóvel">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- FIM Imoveis disponiveis para compra -->

    <!-- Inicio abrir chamado -->
    <h2 id="solicitarButton">Não encontrou nada que procura? Faça uma solicitação!</h2>
    <form action="index-solicitar.php" method="POST">
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
                    <img id="imagemModal" src="../images/card1.jpg" class="img-thumbnail" alt="Imagem do Imóvel">
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
                    <input type="submit" onclick="location.href='https://mail.google.com/mail/u/0/?fs=1&to=redbullfc18@gmail.com&tf=cm#'" class="fadeIn fourth zero-raduis botao-footer" value="EMAIL">
                    <input type="submit" onclick="location.href='https://api.whatsapp.com/send?phone=5584996120413'" class="fadeIn fourth zero-raduis botao-footer" value="TELEFONE">
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Alugueis Disponíveis</a></li>
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
</body>

</html>