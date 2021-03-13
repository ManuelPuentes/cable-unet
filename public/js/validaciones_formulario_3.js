/*
document.addEventListener("DOMContentLoaded", function () {
    variables();
    eventos();
});

function variables() {
    form = document.querySelector("form");
    inputs = document.querySelectorAll("form table input");
    selects = document.querySelectorAll("form table select");
    mensaje = document.getElementById("mensaje");
    
    sumatoria = document.getElementById("sumatoria");
    establecer = document.getElementById("establecer");
    precio = document.getElementById("precio");
}

function eventos() {
    form.addEventListener("submit", function (e) {
        for (let i = 0; i < inputs.length - 1; i++)
        if(inputs[i].value == ""){
            e.preventDefault();
            mensaje.innerText = "No pueden haber campos en blanco";
            return;
        }
        
        let x = false;
        for (let i = 0; i < selects.length; i++)
        if(selects[i].value != "") {
            x = !x;
            break;
        }

        if(!x){
            e.preventDefault();
            mensaje.innerText = "Debe seleccionar al menos un tipo de servicio";
            return;
        }
    });

    sumatoria.addEventListener("click", function () {
        precio.readOnly = true;
        sumatoriaf();
    });

    establecer.addEventListener("click", function () {
        precio.readOnly = false;
    });

    for (let i = 0; i < selects.length; i++)
        selects[i].addEventListener("click", sumatoriaf);
}

function sumatoriaf() {
    if(!precio.readOnly) return;

    let contador = 0;
    for (let i = 0; i < selects.length; i++)
    if(selects[i].value != "")
    contador += parseFloat(document.getElementById(selects[i].id + "_" + selects[i].value).value);
        
    precio.value = contador;
}

let form;
let inputs;
let selects;
let mensaje;

let sumatoria;
let establecer;
let precio;
*/

document.addEventListener("DOMContentLoaded", function () {
    variables();
    eventos();
});

function variables() {
    form = document.querySelector("form");
    inputs = document.querySelectorAll("form table input");
    selects = document.querySelectorAll("form table select");
    mensaje = document.getElementById("mensaje");
}

function eventos() {
    form.addEventListener("submit", function (e) {
        for (let i = 0; i < inputs.length - 1; i++)
        if(inputs[i].value == ""){
            e.preventDefault();
            mensaje.innerText = "No pueden haber campos en blanco";
            return;
        }
        let x = false;
        for (let i = 0; i < selects.length; i++)
        if(selects[i].value != "") {
            x = !x;
            break;
        }

        if(!x){
            e.preventDefault();
            mensaje.innerText = "Debe seleccionar al menos un tipo de servicio";
            return;
        }
    });
}

let form;
let inputs;
let selects;
let mensaje;