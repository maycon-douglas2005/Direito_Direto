const senhaNova = document.getElementById("senhaNova");
const repetirSenha = document.getElementById("repetirSenha");

const button = document.getElementById("confirmar");

const minimo = document.getElementsByClassName("minimo")[0];
const maiusculo = document.getElementsByClassName("maiusculo")[0];
const caractere = document.getElementsByClassName("caractere")[0];

senhaNova.addEventListener('keyup', () => {
    const senha = senhaNova.value;
    const caracteresEspeciais = /[!@#$%^&*(),.?":{}|<>]/g;

    // verifica se o tamanho da senha é maior ou igual a 8
    if (senha.length >= 8) {
        minimo.style.color = "green";
    } else {
        minimo.style.color = "gray";
    }

    // verifica se o primeiro digito é maiuscula
    if (senha.length > 0 && senha[0] === senha[0].toUpperCase() && isNaN(senha[0])) {
        maiusculo.style.color = "green";
    } else {
        maiusculo.style.color = "gray";
    }

    // verifica se possui caractere especial
    if (caracteresEspeciais.test(senha)) {
        caractere.style.color = "green";
    } else {
        caractere.style.color = "gray";
    }
    
})

button.addEventListener('click', () => {
    if(senhaNova.value === repetirSenha.value){
        window.location.href = 'senhaAlterada.html';
        console.log("senha valida")
    } else {
        let errorMessage = document.createElement("strong");
        errorMessage.innerHTML = "Senha inválido";

        let fieldset = document.querySelector('fieldset');
        fieldset.appendChild(errorMessage);
        console.log("Senha inválida")
    }
})