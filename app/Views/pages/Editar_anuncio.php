<h4>Olá, <?php echo $_SESSION['nome'];?>! Edite seu anúncio!</h4>
    <!-- INICIO ANUNCIO -->
    <div class="form-control-teste">
        <div class="wrapper fadeInDown zero-raduis">
            <div id="formContent">
                <form name="anuncioImoveis" method="POST" action="Processo_editar_anuncio" enctype="multipart/form-data" onsubmit="return validateAnuncio();"> <!--action="dashboard.php"-->
                    <br><h5>Dados Pessoais</h5><hr>
                    <p class="text-one-board">Nome do Anunciante</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="nome" class="fadeIn second zero-raduis" name="nome" placeholder="Nome Completo" pattern="[A-Za-zÀ-ú ']{4,}" value="<?php if(isset($_SESSION['nome'])){echo $_SESSION['nome'];}?> " readonly=“true” required><br><br>
                    
                    <p class="text-one-board">Celular</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="celular" class="fadeIn second zero-raduis" name="celular" placeholder="+99 (99) 9.9999-9999" onkeypress="maskCelular(this)" minlength="18" maxlength="18" readonly=“true” value="<?php if(isset($_SESSION['celular'])){echo $_SESSION['celular'];}?> " required><br><br>

                    <p class="text-one-board">Email</p>
                    <p class="obrigatorio">*</p>
                    <input type="email" id="email" class="fadeIn second zero-raduis" name="email" placeholder="Email" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?> " readonly=“true” required><br><br>

                    <hr>
                    <h5>Dados do Anúncio</h5><hr>

                    <p class="text-one-board">Cidade</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="Edit_cidade" class="fadeIn second zero-raduis" name="cidade" placeholder="Ex: Pau dos Ferros/RN" value="<?php if(isset($_SESSION['edit-cidade']))echo $_SESSION['edit-cidade']; ?>" required><br><br>

                    <p class="text-one-board">Tipo de Anúncio</p>
                    <p class="obrigatorio">*</p><br><br>

                    <input type="radio" id="venda" name="tipo" value="venda">
                    <label for="venda">Venda do Imóvel</label><br>
                    <input id="aluguel" type="radio" id="aluguel" name="tipo" value="aluguel" checked>
                    <label for="aluguel">Aluguel do Imóvel</label><br>

                    <br><p class="text-one-board">Tipo de Imóvel</p>
                    <p class="obrigatorio">*</p><br>
                    <input type="text" id="Edit_tipo-imovel" value="<?php if(isset($_SESSION['edit-tipoImovel']))echo $_SESSION['edit-tipoImovel']; ?>" class="fadeIn second zero-raduis" name="tipo-imovel" placeholder="Casa, Apartamento, Fazenda, Hotel" required><br><br>
                    
                    <br><p class="text-one-board">Situação</p>
                    <p class="obrigatorio">*</p><br>
                    <input type="text" id="Edit_situacao" value="<?php if(isset($_SESSION['edit-situacao']))echo $_SESSION['edit-situacao']; ?>" class="fadeIn second zero-raduis" name="situacao" required><br><br>

                    <p class="text-one-board">Preço</p>
                    <p class="obrigatorio">*</p>
                    <input type="text" id="Edit_preco" value="<?php if(isset($_SESSION['edit-preco']))echo $_SESSION['edit-preco']; ?>" class="fadeIn second zero-raduis" name="preco" placeholder="R$ 000.000" required><br><br>

                    <p class="text-one-board">Selecione uma(s) imagem(s) do seu imóvel</p>
                    <p class="obrigatorio">*</p>
                    <!-- <input type="file" id="inputImagem" name="inputImagem" class="btn btn-sucess" accept="image/png, image/jpeg, image/jpg" maxlength="1024" required multiple/><br> -->
                    
                    <div class="mb-3">
                        <input style="margin-left:5%;" name="arquivo" type="file" id="Edit_inputImagem" class="form-control" accept="image/png, image/jpeg, image/jpg" maxlength="2048" aria-label="file example" required multiple>
                        <div class="invalid-feedback">Example invalid form file feedback</div> 
                    </div> 
                    
                    <!-- <input type="text" id="imagem" class="fadeIn second zero-raduis" name="imagem" placeholder="R$ 000.000" required><br><br> -->

                    <br><p class="text-one-board">Faça uma breve descrição do Imóvel (Opcional)</p>
                    <textarea id="Edit_w3review" name="w3review" rows="4" cols="50" placeholder="Ex: Casa com 2 salas, 3 quartos climatizados, próximo ao IFRN Pau do Ferros"></textarea>
                    <p id="msgErro"></p>

                    <input type="submit" onclick="unset($_SESSION['edit-cidade']); unset($_SESSION['edit-situacao']); unset($_SESSION['edit-preco']); unset($_SESSION['edit-tipoImovel']); " class="fadeIn fourth zero-raduis" value="Atualizar">
                </form>
            </div>
        </div>
    </div>
