let compra = document.getElementById("compra");
let utilidad = document.getElementById("utilidad");
let impuesto = document.getElementById("impuesto");
let calcular = document.getElementById("btnCalcular");
let borrar = document.getElementById("btnBorrar");
let venta = document.getElementById("venta");
let ganancia = document.getElementById("ganancia");
let subtotal = 0;
let total = 0;

function validarInputs() {
    if (compra.value.length > 0 && utilidad.value.length > 0 && impuesto.value.length > 0) {
        calcular.disabled = false;
        console.log("entro al false")
    } else {
        calcular.disabled = true;
        console.log("entro al true")
    }
}
compra.addEventListener('input', validarInputs);
utilidad.addEventListener('input', validarInputs);
impuesto.addEventListener('input', validarInputs);

calcular.addEventListener("click", function () {
    subtotal = parseInt(compra.value) * parseInt(utilidad.value) / 100;
    total = subtotal + parseInt(compra.value) + parseInt(compra.value) * parseInt(impuesto.value) / 100;
    venta.value = total;
    ganancia.value = subtotal;
    console.log(compra.value.length)
});


borrar.addEventListener("click", function () {

    if (compra.value.length <= 0 && utilidad.value.length <= 0 && impuesto.value.length <= 0) {
        alert('No tengo nada que borrar revisa')
    } else {
        let confirmar = confirm("Esta seguro de borrar el contenido");
        if (confirmar == true) {
            compra.value = "";
            utilidad.value = "";
            impuesto.value = "";
            venta.value = "";
            ganancia.value = "";
            calcular.disabled = true;
        } else {
            alert('!!Que bueno que pregunté!!')
        }
    }
});