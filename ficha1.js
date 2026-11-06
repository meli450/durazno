"use strict";
let curso = {
    titulo: "JavaScript",
    horas: 60,
    describir() {
        return this.titulo + ": " + this.horas + " horas";
    }
};
curso.modalidad = "presencial";
curso.cambiarModalidad= function(nuevaModalidad){
    modalidad= "online";
}; 
console.log(curso.aula)
if (!Object.hasOwn(curso, "aula")) {
    curso.aula = "B2";
};
delete curso.aula;
console.log(curso.aula);
