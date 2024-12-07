let arquivo = document.getElementById("arquivo");
let texto = document.querySelector(".arquivo-texto");

arquivo.addEventListener("change", function() {
    var fileName = this.files[0]?.name || "Nenhum arquivo escolhido";
    texto.textContent = fileName;
    texto.style.color = "#008000";
  });