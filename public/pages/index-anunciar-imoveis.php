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

    <script src="../public/js/jquery.min.js"></script> <!-- TESTE -->
    <script src="../public/js/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/main.js"></script>

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

    <h4>Para anunciar imóveis, preencha corretamente os dados abaixo!</h4>
    <!-- INICIO ANUNCIO -->
    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">
                <form name="anuncioImoveis" method="POST" action="index-imoveis-disponiveis.php" enctype="multipart/form-data" onsubmit="return validateAnuncio();"> <!--action="dashboard.php"-->
                    <br><h5>Dados Pessoais</h5><hr>
                    <p class="text-one-board">Nome do Anunciante</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="nome" class="fadeIn second zero-raduis" name="nome" placeholder="Nome Completo" pattern="[A-Za-zÀ-ú ']{4,}" required><br><br>
                    
                    <p class="text-one-board">Celular</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="celular" class="fadeIn second zero-raduis" name="celular" placeholder="+99 (99) 9.9999-9999" onkeypress="maskCelular(this)" minlength="18" maxlength="18" required><br><br>

                    <p class="text-one-board">Email</p>
                    <p class="obrigatorio">*</p>
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="Email" required><br><br>

                    <hr>
                    <h5>Dados do Anúncio</h5><hr>

                    <p class="text-one-board">Cidade</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="endereco" class="fadeIn second zero-raduis" name="endereco" placeholder="Ex: Pau dos Ferros/RN" required><br><br>

                    <p class="text-one-board">Tipo de Anúncio</p>
                    <p class="obrigatorio">*</p><br><br>

                    <input type="radio" id="venda" name="tipo" value="venda">
                    <label for="venda">Venda do Imóvel</label><br>
                    <input id="aluguel" type="radio" id="aluguel" name="tipo" value="aluguel" checked>
                    <label for="aluguel">Aluguel do Imóvel</label><br>

                    <br><p class="text-one-board">Tipo de Imóvel</p>
                    <p class="obrigatorio">*</p><br>
                    <input type="text" id="tipo-imovel" class="fadeIn second zero-raduis" name="tipo-imovel" placeholder="Casa, Apartamento, Fazenda, Hotel" required><br><br>
                    
                    <p class="text-one-board">Preço</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="preco" class="fadeIn second zero-raduis" name="preco" placeholder="R$ 000.000" required><br><br>

                    <p class="text-one-board">Selecione uma(s) imagem(s) do seu imóvel</p>
                    <p class="obrigatorio">*</p>
                    <!-- <input type="file" id="inputImagem" name="inputImagem" class="btn btn-sucess" accept="image/png, image/jpeg, image/jpg" maxlength="1024" required multiple/><br> -->
                    
                    <div class="mb-3">
                        <input type="file" id="inputImagem" class="form-control" accept="image/png, image/jpeg, image/jpg" maxlength="1024" aria-label="file example" required multiple>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    
                    <!-- <input type="text" id="imagem" class="fadeIn second zero-raduis" name="imagem" placeholder="R$ 000.000" required><br><br> -->

                    <br><p class="text-one-board">Faça uma breve descrição do Imóvel (Opcional)</p>
                    <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Ex: Casa com 2 salas, 3 quartos climatizados, próximo ao IFRN Pau do Ferros"></textarea>
                    <p id="msgErro"></p>

                    <input type="submit" class="fadeIn fourth zero-raduis" value="anunciar">
                </form>
            </div>
        </div>
    </div>
    <!-- FIM ANUNCIO -->

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

    <!-- FIM NAV-BAR -->
