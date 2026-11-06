let cliente={
    nombre: "Naiara"
}
console.log(cliente.direccion); 
// Da undefined al leer una propiedad ausente de un objeto existente 

// cliente.direccion.ciudad -> Daría TypeError al leer una propiedad de undefined

cliente.obtenerCiudad= function(cliente){
    cliente.direccion= "Sin ciudad";
    if(cliente.direccion?.ciudad !== undefined){
        cliente= this.cliente.ciudad[""];
    }
    return cliente;
}
cliente.direccion={
    ciudad: "Alcoy"
};
console.log(cliente.direccion.ciudad);
// console.log(Object.keys(cliente).length); // contar longitud objeto cliente
