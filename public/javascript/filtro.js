let filtroDesktop = document.querySelector(".filtro-advogado");
let filtroTablet = document.querySelector(".filtro-tablet");


window.addEventListener('resize', () => {
    if (window.innerWidth > 475 && window.innerWidth < 1020) {
        filtroDesktop.style.display = "none";
        filtroTablet.style.display = "block";
    } else {
        filtroDesktop.style.display = "block";
        filtroTablet.style.display = "none";
    }
});