let renda = document.querySelector("#div-ocultar");
let select = document.querySelector(".signup-container");

function mudar () {
    if (select.value == 2) {
        renda.style.display = "flex";
    }
    else {
        renda.style.display = "none";
    }

}