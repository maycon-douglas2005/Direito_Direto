let button = document.querySelector("#closeModalBtn");
let modal = document.querySelector(".modal");
let checkbox = document.querySelector("#checkbox");

window.onload = function() {
    
    if (localStorage.getItem("modalShown")) {
        modal.style.display = "none"; 
    } else {
        modal.style.display = "block"; 
    }
}

button.addEventListener("click", () => {

    if (checkbox.checked) {
        modal.style.display = "none";
        localStorage.setItem("modalShown", "true");
    }
});