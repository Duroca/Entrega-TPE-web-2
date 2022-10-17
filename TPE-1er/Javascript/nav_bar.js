"use strict"

function iniciar(){
    // Desplegar opciones del menu
    let btn_burger = document.querySelector(".menu_icon");
    btn_burger.addEventListener("click", function(){
        btn_burger.classList.toggle("show_menu");
        document.querySelector(".menu_options").classList.toggle("menu_options_show");
    });

    // Abrir el formulario de cotizacion
    let btn_open
    btn_open = document.querySelector(".btn_cotizacion");
    btn_open.addEventListener("click", function(){
        document.querySelector(".full_dark_screen").classList.remove("hidden");
        console.log("formulario abierto");
        generar_captcha();
    });

    // Chequear inputs
    function validar_input(e){
        if (e.value == ""){
            e.classList.add("invalido");
        }
        else{
            e.classList.remove("invalido");
        }
    }

    let inputs = document.querySelectorAll("#form_cotizacion input");
    inputs.forEach(input => {
        input.addEventListener('blur', function(){
            validar_input(input);
        })
    });

    // Cerrar el formulario de cotizacion
    let btn_close
    btn_close = document.querySelector(".btn_close");
    btn_close.addEventListener("click", cerrar_form);
        
    function cerrar_form(){
        document.querySelector(".full_dark_screen").classList.add("hidden");
        document.getElementById("form_cotizacion").reset();
        inputs.forEach(input => {
            input.classList.remove("invalido");
        });
        console.log("formulario cerrado");
    }

    // Enviar el formulario de cotizacion
    let btn_enviar;
    btn_enviar = document.querySelector("#btn_submit");
    btn_enviar.addEventListener("click", function(e){
        e.preventDefault();
        inputs.forEach(input => {
            validar_input(input);
        });
        //Chequea que los inputs tengan valores
        let i = 0;
        while ((i < inputs.length) && (inputs[i].classList != "invalido")){
            i++;
        };
        if (i == inputs.length){
            console.log("todos los inputs estan cargados");
            if (inputs[inputs.length - 1].value == captcha_str){ // Verifica el captcha
                alert("Gracias por su consulta! Responderemos en la brevedad");
                cerrar_form();
            }
            else{
                alert("Captcha incorrecto. Intentelo nuevamente");
                generar_captcha();
            }
        }
    });

    // Generar el captcha
    let captcha_str;
    function generar_captcha(){
        let ltrs = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        let word = ['', '', '', '', '', '', ''];
        for (let i = 0; i < 7; i++){
            word [i] = ltrs[Math.floor(Math.random() * ltrs.length)];
        }
        let string_p = word.join("");
        captcha_str = string_p;
        CreaIMG(string_p);
        console.log("captcha generado");
    }
    function CreaIMG(texto) {
        let ctxCanvas = document.getElementById('captcha').getContext('2d');
        let fontSize = "30px";
        let fontFamily = "Gill Sans Extrabold";
        let width = 150;
        let height = 50;
        //tamaño
        ctxCanvas.canvas.width = width;
        ctxCanvas.canvas.height = height;
        //color de fondo
        ctxCanvas.fillStyle = "wheat";
        ctxCanvas.fillRect(0, 0, width, height);
        //puntos de distorsion
        ctxCanvas.setLineDash([10, 10]);
        ctxCanvas.lineDashOffset = 1;
        ctxCanvas.beginPath();
        let line;
        for (let i = 0; i < (width); i++) {
            line = i * 8;
            ctxCanvas.moveTo(line, 0);
            ctxCanvas.lineTo(0, line);
        }
        ctxCanvas.stroke();
        //formato texto
        ctxCanvas.direction = 'ltr';
        ctxCanvas.font = fontSize + " " + fontFamily;
        //texto posicion
        let x = (width / 7);
        let y = (height / 3) * 2;
        //color del borde del texto
        ctxCanvas.strokeStyle = "red";
        ctxCanvas.strokeText(texto, x, y);
        //color del texto
        ctxCanvas.fillStyle = "blue";
        ctxCanvas.fillText(texto, x, y);
    }
}
document.addEventListener("DOMContentLoaded", iniciar);