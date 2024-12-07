let hamburger = document.getElementById("hamburger");
let menuMobile = document.querySelector(".container");

hamburger.addEventListener('click', () => {
    if (menuMobile.style.display === "block" || getComputedStyle(menuMobile).display === "block") {
        menuMobile.style.display = "none";
        hamburger.style.display = "block";
    } else {
        menuMobile.style.display = "block";
        menuMobile.style.position = "relative";
        menuMobile.style.zIndex = "9999";
        hamburger.style.display = "none";
    }
});

document.addEventListener('click', (e) => {
    if (menuMobile.style.display === "block" || getComputedStyle(menuMobile).display === "block") {
        if (!menuMobile.contains(e.target) && e.target !== hamburger) {
            menuMobile.style.display = "none";
            hamburger.style.display = "block";
        }
    }
});

window.addEventListener('resize', () => {
    if (window.innerWidth > 550) { 
        menuMobile.style.display = "none";
        hamburger.style.display = "none";
    } else {
        hamburger.style.display = "block";
    }
});
