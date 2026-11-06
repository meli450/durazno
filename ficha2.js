"use strict";
let linea = {
    nombre: "Cuaderno",
    precio: 3,
    unidades: 2,
    calcularTotal() {

    }
}
linea.cambiarUnidades = function (cantidad) {
    cantidad= false;
    if (cantidad % 1 === 0 && cantidad >= 0) {
        this.unidades= cantidad;
    return cantidad;
}}

