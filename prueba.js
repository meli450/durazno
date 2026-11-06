//  const producto ={
//     nombre: "Teclado",
//     precio: 25,
//     unidades: 4,
//     disponible: true,
//     calcularImporte(){
//         return this.precio*this.unidades;
//     }
//  };

//  console.log(producto.nombre);
//  console.log(producto.calcularImporte());

// const ficha={
//     titulo: "Guía de CSS",
//     "nivel recomendado": "inicial"
// };

// const campo="titulo";
// const getPropName = () => "titulo";

// console.log(ficha.titulo);
// console.log(ficha["titulo"]);
// console.log(ficha[campo]);

// console.log(ficha[getPropName()]);

// console.log(ficha.campo);
// console.log(ficha["nivel recomendad"]);
// ficha[campo]= "Guía de JS";
// console.log(ficha.titulo);


let tarea={
    titulo: "JS",
    estado: "BACKLOG",
    resumen(){
        return this.titulo + this.estado;
    }
};

tarea["prioridad"]= "alta";
tarea.completarTarea= function(){
    this.estado= "DONE"
};

console.log(tarea.prioridad);
console.log(tarea.examen);
console.log(tarea.completarTarea());
console.log(tarea.estado);
console.log(tarea.resumen());