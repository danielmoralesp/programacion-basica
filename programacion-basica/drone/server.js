console.log("iniciando server de node");

//LIBRERIA PARA DESCARGAR EL DRONE
// npm install ar-drone
var arDrone = require("ar-drone");
var drondinez = arDrone.createClient();

function bateria(){
	console.log("Bateria: " + drondinez.battery());
}

function despegar_drone(){
	drondinez.config("control:altitude_max", 100000);
	drondinez.takeoff();
	rotar_drone();
}

function rotar_drone(){
	drondinez.stop();
	drondinez.calibrate(0);
}

function aterrizar_drone(){
	drondinez.stop();
	drondinez.land();
}


//PARA INSTALAR EXPRESS SIEMPRE EN CARPETA LOCAL, EN COLODA HACER EL SIGUIENTE COMANDO:
// npm install express
var express = require("express");
var web = express();
var servidor;

servidor = web.listen(8080, function(){
	console.log("servidor arrancado");
});

web.get("/", function (req, res){
	console.log("Home");
	bateria();
	res.sendfile("opciones.html");
});


//Despquegue
web.get("/despegar", function (req, res){
	console.log("Despegando");
	bateria();
	despegar_drone();
	res.sendfile("opciones.html");
});

web.get("/aterrizar", function (req, res){
	console.log("Aterrizando");
	bateria();
	aterrizar_drone();
	res.sendfile("opciones.html");
});

