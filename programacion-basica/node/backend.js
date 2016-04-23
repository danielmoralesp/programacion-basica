var pepito = "Madrid";
var basededatos ={
	usuario: "daniel",
	password: "floresymas"
};

console.log("Arrancando server de Node");


//PARA INSTALAR EXPRESS SIEMPRE EN CARPETA LOCAL, EN COLODA HACER EL SIGUIENTE COMANDO:
// npm install express
var express = require("express");
var parcero = require ("body-parser");
var web = express();
web.use( parcero.urlencoded() );
var servidor;

servidor = web.listen(8080, function(){
	console.log("servidor arrancado");
});

//Home
web.get("/", function (req, res){
	res.sendfile("formulario.html");
});

web.post("/entrar", function (req, res){
	if(req.body.usuario == basededatos.usuario && req.body.clave == basededatos.password)
	{
		res.send("Bienvenido al area secreta");
	}else{
		res.send("fuera de aquii");
	}
});

/*Prueba de URLs amigables*/

web.get("/test", function (req, res){
	res.send("Tu avion es el " + req.query.avion + " y tu edad es " + req.query.edad);
});

web.get("/hola/mama-es-linda", function (req, res){
	res.send("Hola <strong>mama</strong>, estoy triunfando");
});


