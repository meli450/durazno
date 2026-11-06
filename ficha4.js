const a = { 
    codigo: "X1", 
    precio: 10 
}; 
const b = a; // no crea un objeto nuevo. Tanto a como b apuntan al mismo objeto
const c = { ...a }; //crea un objeto nuevo copiando las propiedades de a
const d = { 
    codigo: "X1", 
    precio: 10 
};
b.precio = 12;

//1º false, hace referencia pero no es el mismo valor y tipo
console.log(a === b); 
// Resultado real:  true

//2º true, si porque tienen el mismo tipo y valor al ser una copia
console.log(a === c); 
// Resultado real: false

//3º true, si porque tienen el mismo tipo y valor al ser una copia
console.log(c === d); 
// Resultado real: false

//4º 12
console.log(a.precio); 
// Resultado real: 12

//5º 10
console.log(c.precio); 
// Resultado real: 10

//6º true && true= true
console.log(c.codigo === d.codigo && c.precio === d.precio);
// Resultado real: true
