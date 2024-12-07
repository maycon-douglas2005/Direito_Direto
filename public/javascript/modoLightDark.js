let trilho = document.getElementById("trilho");

let header = document.querySelector("header");
let body = document.querySelector("body");
let section = document.querySelectorAll("section");

let li = document.querySelector("li");
let span = document.querySelector("span");
let p = document.querySelectorAll("p")
let a = document.querySelectorAll("a");
let button = document.getElementById("enviar");

trilho.addEventListener("click", () => {
    trilho.classList.toggle("light");

    header.classList.toggle("light");
    body.classList.toggle("light");
    span.classList.toggle("light");
    p.classList.toggle("light");
    section.classList.toggle("light");
    li.classList.toggle("light");
})