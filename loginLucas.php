

<?php
session_start();

if(!isset($_POST['usuario'])){
   die();
}

if(!isset($_POST['clave'])){
	die();
}

$usuario= $_POST['usuario'];
$clave = $_POST['clave'];

if(empty($usuario)){
	die();
}

if(empty ($clave)){
	die();
}

$conexion= mysqli_connect("localhost:3307", "root", "", tododb);
  $sql = "SELECT * FROM usuariostodo where usuario = '$usuario' and pass = '$clave'";

  $respuesta = mysqli_query($conexion, $sql);

  $registro = mysqli_fetch_array($respuesta);

  if($registro == null){
  	echo "ese usuario no existe";
}

$coincide = password_verify($clave, $registro['pass']);
if($coincide == false){
header("la contraseña no es valida");
}
$_session['id'] = $registro['id'] ;
header("location:menuLucas.html");

?>