var express = require('express');
var handlebars = require('express-handlebars');

var app = express();
app.use(express.static('public'));

//para que ande el formulario
app.use(express.urlencoded());
//para que ande el handlebars
app.engine("hbs", handlebars());
app.set("view engine", 'hbs');


app.get('/prueba', function(req, res){
    var nombre = "Peter";
    var apellido = "pan";
    var edad = "15";

    res.render('prueba', {nombre, apellido, edad});

});

app.post('/persona', function(req, res){
    var errores = [];
  if(!req.body.nombre || req.body.nombre == " "){
    errores.push("falta el nombre");
  }
  if(!req.body.apellido || req.body.apellido == " "){
    errores.push("falta el apellido");
  }

  if(!req.body.edad || req.body.edad < 1){
   errores.push("falta la edad");
  }

  if(errores.length> 0){
    res.render('error.hbs',{errores});
  }
    var nombre = req.body.nombre;
    var apellido = req.body.apellido;
    var edad = req.body.edad;
    
    res.render('registroExitoso.hbs',{nombre}, {apellido}, {edad});
});

app.listen(3000, function(){
    console.log("servidor funcionando");
});

