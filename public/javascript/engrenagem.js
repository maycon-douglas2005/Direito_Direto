
let engrenagem = document.querySelector("#interruptor"); // Ação para engrenagem
let modal = document.querySelector("#modal"); // Gera a modal

let liEditar = document.querySelector("#editar"); // Ação para o editar
let liSair = document.querySelector("#sair"); // Ação para sair do modo edição

let ligado = false; 

engrenagem.addEventListener('click', function() {
    ligado = !ligado; 
    modal.style.display = ligado ? "block" : "none";

})



let paragrafoResumoProfissional = document.querySelector('#paragrafo-resumo')

let especialiade_1 = document.querySelector('#especialiade_1')
let especialiade_2 = document.querySelector('#especialiade_2')
let especialiade_3 = document.querySelector('#especialiade_3')

let fotoFundo = document.querySelector('#imagemFundo')
let fotoPerfil = document.querySelector('#imagemPerfil')


liEditar.addEventListener('click', function editar(){
    paragrafoResumoProfissional.setAttribute('contenteditable', 'true')
    especialiade_1.setAttribute('contenteditable', 'true')
    especialiade_2.setAttribute('contenteditable', 'true')
    especialiade_3.setAttribute('contenteditable', 'true')

    fotoFundo.style.cursor = 'pointer'
    fotoPerfil.style.cursor = 'pointer'

    document.getElementById("imagemFundo").onclick = function() {

        document.getElementById("uploadImagemFundo").click();
        
        const fileInput = document.getElementById("uploadImagemFundo");

        fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];

        if (file && file.type.startsWith("image/")) {
            const formData = new FormData();
            formData.append('imagem', file);

            fetch('../Model/alterandoFotoFundo.php', {
            method: 'POST',
            body: formData
            })
            .then(() => {
            console.log('Imagem enviada com sucesso!');
            
            })
            .catch(error => {
            console.error('Erro ao enviar a imagem:', error);
            });
        } else {
            alert('Erro geral')
        }
        });
        



        
    };
    
    document.getElementById("imagemPerfil").onclick = function() {
        document.getElementById("uploadImagemPerfil").click();

        const fundo = false;

        fetch('../Model/alterandoFotoPerfil.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ fundo })
        })
        .catch(error => {
            console.error('Erro:', error);
        });

        const fileInput = document.getElementById("uploadImagemPerfil");

        fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];

        if (file && file.type.startsWith("image/")) {
            const formData = new FormData();
            formData.append('imagem', file);

            fetch('../Model/alterandoFotoPerfil.php', {
            method: 'POST',
            body: formData
            })
            .then(() => {
            console.log('Imagem enviada com sucesso!');
            
            })
            .catch(error => {
            console.error('Erro ao enviar a imagem:', error);
            });
        } else {
            alert('Erro geral')
        }
        });
    };
})

liSair.addEventListener('click', function sair(){
    paragrafoResumoProfissional.setAttribute('contenteditable', 'false')
    especialiade_1.setAttribute('contenteditable', 'false')
    especialiade_2.setAttribute('contenteditable', 'false')
    especialiade_3.setAttribute('contenteditable', 'false')

    fotoFundo.style.cursor = 'auto'
    fotoPerfil.style.cursor = 'auto'

    document.getElementById("imagemFundo").onclick = null;
    document.getElementById("imagemPerfil").onclick = null;
})

















/*
// Opção para enviar a imagem selecionada para o servidor
document.getElementById("uploadImagemFundo").addEventListener("change", function() {
    let file = this.files[0];
    uploadImagem(file, "fundo");
});

document.getElementById("uploadImagemPerfil").addEventListener("change", function() {
    let file = this.files[0];
    uploadImagem(file, "perfil");
});

function uploadImagem(file, tipo) {
    // Validação do arquivo (opcional)
    if (!file.type.match('image.*')) {
        alert('Por favor, selecione um arquivo de imagem.');
        return;
    }

    let formData = new FormData();
    formData.append("imagem", file);
    formData.append("tipo", tipo);

    fetch("../Model/upload_imagem.php", {
        method: "POST",
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    }) // Retornar o novo nome da imagem do servidor
    
    .then(data => {
        if (data.success) {
            // Se o upload foi bem-sucedido, atualiza o banco de dados usando fetch
            fetch('../Model/alterandoFotoPerfil.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: `imagem_${tipo}=${encodeURIComponent(data.novoNome)}`
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erro ao atualizar a imagem no banco de dados');
                    
                }
                // Se a atualização foi bem-sucedida, exibe uma mensagem de sucesso
                alert('Imagem atualizada com sucesso!');
                location.reload();
            })
            .catch(error => {
                console.error('Erro ao atualizar a imagem:', error);
                alert('Ocorreu um erro ao atualizar a imagem.');
            });
        } else {
            // Se o upload falhou, exibe uma mensagem de erro
            console.error('Erro ao fazer o upload da imagem:', data.error);
            alert('Erro ao fazer o upload da imagem.');
        }
    })
    .catch(error => {
        console.error('Erro na requisição:', error);
        alert('Ocorreu um erro inesperado.');
    });
}
} catch(error){
    console.error('Ocorreu um erro: ', error.message);
} */ 