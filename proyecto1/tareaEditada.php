<?php
$id = $_GET["id"];


$conexion = mysqli_connect('localhost', 'root', '', 'tododb');

if (empty($_POST) == false) { // Se envio el formulario
	$tarea = $_POST["tarea"];
	$realizada = $_POST["realizada"];
$sql = "UPDATE tareas set tarea='$tarea', realizada='$realizada'
where id='$id' ";
$respuesta = mysqli_query($conexion, $sql);
 header("Location: todasTareas.php");
}
$sql = "select * from tareas where id=$id";
$respuesta = mysqli_query($conexion, $sql);
$registro = mysqli_fetch_array($respuesta);

if ($registro==NULL) {
 echo "Contacto no encontrado";
 die();
}
$id = $registro ["id"];
$tarea = $registro ["tarea"];
$realizada = $registro ["realizada"];
$fecha = $registro ["fecha"];

?>
    <html>
 
    <form method="post">
 <label>
 
 <input type="text" name="tarea" value="<?php echo $tarea;?> ">
 </label>
 <label>
 
 <input type="text" name="realizada" value="<?php echo $realizada;?> ">
 </label>
 <button type="submit">Guardar</button>
</form>

</html>