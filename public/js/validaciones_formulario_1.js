document.addEventListener("DOMContentLoaded", function () {
    variables();
    eventos();
});

function variables() {
    form = document.querySelector("form");
    inputs = document.querySelectorAll("form table input");
    mensaje = document.getElementById("mensaje");

    precio = document.getElementById("precio");
}

function eventos() {
    form.addEventListener("submit", function (e) {
        if(precio.value == "") precio.value = 0;
        
        for (let i = 0; i < inputs.length - 1; i++)
        if(inputs[i].value == ""){
            e.preventDefault();
            mensaje.innerText = "No pueden haber campos en blanco";
            return;
        }
    });
}

let form;
let inputs;
let mensaje;

let precio;