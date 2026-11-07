const panel = {
  titulo: "Inicio",
  mostrarTitulo(){
    return this.titulo;
  },
  obtenerEstado(){
    return "preparado";
  }  
};

for(const clave in panel) {
  if(Object.hasOwn(panel, clave) && typeof panel[clave] === "function"){
    console.log(clave + "(param): " + panel[clave]("bien"));
  }
}

panel["obtenerEstado"]("bien");
ponel.obtenerEstado("bien");
