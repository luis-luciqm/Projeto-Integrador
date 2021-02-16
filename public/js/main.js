// alert('eu funciono aqui hhe');

function maskCEP(input){
    var tam = input.value.length;
    if(tam == 5) input.value += "-";
}

function maskCelular(input){
    var tam = input.value.length;

    if(tam == 0) input.value += "+";
    if(tam == 3) input.value += "(";
    if(tam == 6) input.value += ")9.";
    if(tam == 13) input.value += "-"
}

function validarCampos(){
    var estado = true;
    // var senha = document.forms["validar"]["senha"].value.trim();
    // var confirmarSenha = document.forms["validar"]["csenha"].value.trim();
    var senha = document.validar.senha.value.trim();
    var confirmarSenha = document.validar.csenha.value.trim();

    if(senha != confirmarSenha){
        document.getElementById("msgErro").innerHTML = "Senhas diferentes!";
        estado = false;
        return estado;
    }
    
    if(senha.length < 6 || confirmarSenha.length < 6){
        document.getElementById("msgErro").innerHTML = "Senha deve ter no mínimo 6 caracteres!";
        estado = false;
        return estado;
    }

    if(estado) document.getElementById("msgErro").innerHTML = "";
    // console.log()
    if(verificaEspaco()) alert("Preencha todos os campos!"); 

    return estado;
}

function verificaEspaco(){
    var campoEmBranco = [
        document.forms["validar"]["nome"].value.trim(),
        document.forms["validar"]["endereco"].value.trim(),
        document.forms["validar"]["cep"].value.trim(),
        document.forms["validar"]["celular"].value.trim(),
        document.forms["validar"]["email"].value.trim(),
        document.forms["validar"]["senha"].value.trim(),
        document.forms["validar"]["csenha"].value.trim()
    ]

    var tamEmail = campoEmBranco[4].length;
    if(tamEmail > 80){
        alert("Não é permitido inserir mais de 80 caracteres em Email! Por favor, use um email menor.")
        return true;
    }

    for(var i = 0; i < campoEmBranco.length; i++){
        if(campoEmBranco[i] == "")
            return true;
        return false;
    }
}

function senhaPequenaLogin(){ 
    var status = false;
    var senha = document.forms["validarLogin"]["senhaLogin"].value.trim();

    if(senha.length < 6){
        document.getElementById("msgErro").innerHTML = "Senha deve ter no minimo 6 caracteres";
        status = true;
        return status;
    }

    if(!status) document.getElementById("msgErro").innerHTML = "";
    return status;
}