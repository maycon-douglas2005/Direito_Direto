const inputEmail = document.getElementById("email");
const button = document.getElementById("confirmar");

button.addEventListener("click", () => {
    const emailValue = inputEmail.value.toLowerCase();
    const verificaEmail = ["@", "gmail", "hotmail", "outlook,", "yahoo"];
    let isValid = false;

    for (let i = 0; i < verificaEmail.length; i++) {
        
        if(emailValue.includes(verificaEmail[i])){
            isValid = true;
            break;
        }
    }

    let errorMessage = document.querySelector(".valorEmail strong");
    if (errorMessage) {
        errorMessage.remove();
    }

    if (!isValid) {
        errorMessage = document.createElement("strong");
        errorMessage.innerHTML = "Email inválido";

        let autenticacaoEmail = document.querySelector('.valorEmail');
        autenticacaoEmail.appendChild(errorMessage);
    }
})