<?php
$conexion = mysqli_connect("localhost:3307", "root", "", "todo");

if(!isset($_POST["realizada"])){
	die();
}

$tareaIngresada = $_POST["tarea"];
//$realizada = $_POST["realizada"];

if($_POST["realizada"] == "1"){
	$realizada = "finalizada";
}
else {
	$realizada = "";
}
$sql = "INSERT into tareas (estado,nombre)values ('$realizada', '$tareaIngresada') ";


$respuesta = mysqli_query($conexion, $sql);

if($respuesta == true){
	echo "se realizo correctamente";
}
else {
	echo "no se realizo correctamente";
}


?>