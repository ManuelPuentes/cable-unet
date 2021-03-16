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

        let canales = false;
        for (let i = 0; i < inputs.length - 1; i++){
            if((i < 3) && (inputs[i].value == "")){
                e.preventDefault();
                mensaje.innerText = "No pueden haber campos en blanco";
                return;
            }
            else if((i >= 3) && (inputs[i].checked)){
                canales = !canales;
                break;
            }
        }
        if(!canales){
            e.preventDefault();
            mensaje.innerText = "Debe seleccionar al menos un canal";
            return;
        }
    });
}

let form;
let inputs;
let mensaje;

let precio;