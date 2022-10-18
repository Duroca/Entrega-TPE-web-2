"use strict"

function Iniciar(){
    let tabla_productos = document.querySelector("#tabla_productos");
    let botones = tabla_productos.querySelectorAll(".btn_editar");
    botones.forEach(btn => {
        btn.addEventListener("click", function(){
            let fila = btn.parentNode.parentNode;
            editar(fila);
        })
    })
    function cancelar(){
        location.reload();
    }
    function editar(fila){
        let celdas = fila.querySelectorAll("td");
        let d_temporal = new Array;

        for (let i = 0; i < (celdas.length - 1); i++) {
            let input = document.createElement("input");
            switch (i) {
                case 0:
                    input.type = "text";
                    input.value = celdas[i].innerHTML;
                    break;
                case 2:
                    let select = document.querySelector("#select_categoria");
                    input = select.cloneNode(true);
                    input.value = celdas[i].innerHTML;
                    break;
                case 4:
                    input.type = "file";
                    break;
                default:
                    input.type = "number";
                    input.value = celdas[i].innerHTML;
                    break;
            }
            input.name = "edit_"+i;
            celdas[i].innerHTML = "";
            celdas[i].appendChild(input);
            d_temporal.push(celdas[i].cloneNode(true));
        }
        fila.innerHTML = "";
        console.log(d_temporal);
        let form = document.createElement("form");
        d_temporal.forEach(element => {
            let input = element.innerHTML;
            console.log(input.value);
            form.appendChild(input);
        });
        fila.appendChild(form);
        
        // for (let i = 0; i < (celdas.length - 1); i++){
        //     let input = document.createElement("input");
            // input.value = celdas[i].innerHTML;
            // d_temporal.push(celdas[i].innerHTML);
            // celdas[i].innerHTML = "";
            // celdas[i].appendChild(input);
        // }
        let columna_botones = celdas[(celdas.length - 1)];
        columna_botones.classList.add("hidden");
        let td = document.createElement("td");
        let btn_aceptar = document.createElement("button");
        btn_aceptar.innerHTML = "Aceptar";
        let btn_cancelar = document.createElement("button");
        btn_cancelar.innerHTML = "Cancelar";
        td.appendChild(btn_aceptar);
        td.appendChild(btn_cancelar);
        columna_botones.parentNode.appendChild(td);

        btn_cancelar.addEventListener("click", cancelar);

        btn_aceptar.addEventListener("click", function(){
            let inputs = fila.querySelectorAll("input");
            var edit = inputs[1].value.replace('$','');
            let datos = {
                "producto": inputs[0].value,
                "valor": edit,
                "categoria": inputs[2].value,
                "descuento": inputs[3].value
            }
            
            modificar(datos, fila.lastChild.previousSibling.lastChild.id);
        });
    }

    function modificar(dato, id){
        
    }
}

document.addEventListener("DOMContentLoaded", Iniciar);