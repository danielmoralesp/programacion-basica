//EJECUTAR EN CONSOLA PÀRA VER LOS RESULTADOS

//VAMOS PARA VIDEO 9 HTML Y JAVASCRIPT


var perro = {
  fuerza: 100,
  peso: 18,
  tipo: "aventurero",
  agilidad: 65,
  higiene: false,
  amor: true,
  edad: 2,
  salud: "vacunado",
  nombre: "pablo"
};

var gato = {
  fuerza: 40,
  peso: 4,
  tipo: "casero",
  agilidad: 40,
  higiene: true,
  amor: false,
  edad: 0,
  salud: "inmune",
  nombre: "elena"
};

var mascota = gato;
var puntos = 0;

if(mascota.fuerza > 90){
puntos++;
}

if(mascota.peso > 10){
puntos++;
}

if(mascota.tipo == "aventurero"){
puntos = puntos + 2;
}

if(mascota.agilidad >= 70){
puntos++;
}

if(mascota.higiene != true){
puntos++;
}

if(mascota.amor == true){
puntos++;
}

if(mascota.edad > 1 && mascota.edad < 4){
puntos += 2;
}
else if(mascota.edad == 0){
puntos++;
}else
{
puntos--;
}

if(mascota.salud == "vacunado" || mascota.salud == "inmune"){
puntos++;
}
alert("Tu mascota " + mascota.nombre + " tiene "+ puntos);