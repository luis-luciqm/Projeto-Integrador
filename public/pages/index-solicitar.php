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

<body id="corpo">

    <script src="../public/js/jquery.min.js"></script>
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

    <h4>Solicite um imóvel para algum anunciante.</h4>
    <p id="trecho">Caso algum anunciante próximo a você veja sua solicitação, ele entrará em contato.</p>

    <!-- INICIO Cadastro de solicitação -->
    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">
                <form name="anuncioImoveis" method="POST" onsubmit="return validateAnuncio();">
                    <br><h5>Preencha todos os dados</h5><hr>
                    <p class="text-one-board">Nome Completo</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="nome" class="fadeIn second zero-raduis" name="nome" placeholder="Nome Completo" pattern="[A-Za-zÀ-ú ']{4,}" required><br><br>
                    
                    <p class="text-one-board">Celular</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="celular" class="fadeIn second zero-raduis" name="celular" placeholder="+99 (99) 9.9999-9999" onkeypress="maskCelular(this)" maxlength="18" required><br><br>

                    <p class="text-one-board">Email</p>
                    <p class="obrigatorio">*</p>
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="Email" required><br><br>

                    <p class="text-one-board">Em qual cidade deseja um imóvel?</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="cidade" class="fadeIn second zero-raduis" name="cidade" placeholder="Pau dos Ferros/RN" required><br><br>
                    
                    <br><p id="description-textarea" class="text-one-board">Faça uma breve descrição do Imóvel que você procura</p>
                    <p id="obrigatorioo" class="obrigatorio">*</p>
                    <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Exemplo: Busco um apartamento para aluguel; ou: uma casa para comprar com 2 salas, 3 quartos;" required></textarea>
                    <p id="msgErro"></p>

                    <input type="submit" class="fadeIn fourth zero-raduis" value="fazer solicitação">
                </form>
            </div>
        </div>
    </div>
    <!-- FIM Cadastro de solicitação -->
    <!--retirar depois-->
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