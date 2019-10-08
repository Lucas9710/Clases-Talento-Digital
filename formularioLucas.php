<?php
$conexion = mysqli_connect("localhost:3307", "root", "", "todo");

if(!isset($_POST["realizada"])){
	die();
}
$fecha = DATE("d/m/y");
$tareaIngresada = $_POST["tarea"];
$largoDeTarea = strlen($tareaIngresada);

if($largoDeTarea == 0){
 echo "<br> 
 no ingresaste nada
 </br";
}
//$realizada = $_POST["realizada"];

if($_POST["realizada"] == "1"){
	$realizada = "finalizada";
}
else {
	$realizada = "";
}
$sql = "INSERT into tareas (estado,nombre,horario)values ('$realizada', '$tareaIngresada', '$fecha') ";


$respuesta = mysqli_query($conexion, $sql);

if($respuesta == true && $largoDeTarea != 0 ){
	echo "se realizo correctamente";
}
else {
	echo "no se realizo correctamente";
}


?>