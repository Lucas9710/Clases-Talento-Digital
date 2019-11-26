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
  if(!req.body.nombre || req.body.nombre == " "){
    res.send("falte el nombre");
  }
  if(!req.body.apellido || req.body.apellido == " "){
    res.send("falte el apellido");
  }

  if(!req.body.edad || req.body.edad < 1){
    res.send("la edad no es valida");
  }

  res.send("ok");
});

app.listen(3000, function(){
    console.log("servidor funcionando");
});

