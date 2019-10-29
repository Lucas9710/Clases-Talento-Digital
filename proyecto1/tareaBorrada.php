<?php

$id = $_GET["id"];


$conexion = mysqli_connect('localhost', 'root', '', 'tododb');

$sql = "SELECT * FROM tareas WHERE id = $id";
$respuesta = mysqli_query($conexion, $sql);
$registro = mysqli_fetch_array($respuesta);
if($registro){
    $sql= "DELETE FROM tareas where id ='$id'";    
    echo "datos eleminados";
}else{
    echo "datos no eliminados";
}


?>
