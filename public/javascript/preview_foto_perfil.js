const fileInput = document.getElementById("arquivo");
const preview = document.getElementById("preview");

fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];

    if (file && file.type.startsWith("image/")) { // Verifica se é uma imagem
        const reader = new FileReader();
        
        // Ao carregar o arquivo, define a URL de dados como o src da imagem de pré-visualização
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block"; // Exibe a imagem
        };
        
        reader.readAsDataURL(file); // Lê o arquivo como uma URL de dados
    } else {
        preview.style.display = "none"; // Oculta a imagem caso não seja válida
        alert("Por favor, selecione um arquivo de imagem válido.");
    }
});
