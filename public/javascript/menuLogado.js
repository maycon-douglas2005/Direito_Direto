document.addEventListener('DOMContentLoaded', () => {
    let menuLogado = document.querySelector(".usuario-container");
    let perfil = document.querySelector("#perfil");

    perfil.addEventListener('click', (event) => {
        menuLogado.style.display = "block";
        perfil.style.display = "none";
        event.stopPropagation();
    });

    document.addEventListener('click', (event) => {
        if (menuLogado.style.display === "block" && !menuLogado.contains(event.target)) {
            menuLogado.style.display = "none";
            perfil.style.display = "block";
        }
    });
});
