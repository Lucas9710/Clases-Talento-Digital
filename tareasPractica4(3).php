//agrega un campo fecha_realizada a la tabla de tareas y mostrar dicho campo en los listados generados

<?php

$conexion = mysqli_connect("localhost", "root", "", "tareas");
$sql = "SELECT* from tareas where estado ='completado'";
$respuesta = mysqli_query($conexion, $sql);

echo "<table>
			<tr>
			   <th>id</th>
			   <th>tipo</th>
			   <th>tarea</th>
			   <th>estado</th>
         <th>fecha_realizada</th>
			</tr>"; 


while($registro = mysqli_fetch_array($respuesta)){
$id = $registro ["id"];
$tipo = $registro ["tipo"];
$tarea = $registro ["tarea"];
$estado = $registro ["estado"];
$fecha_realizada = $registro ["fecha_realizada"];

  echo "
  		<tr>
  		   <td> $id</td>
  		   <td>$tipo</td>
  		   <td>$tarea</td>
  		   <td>$estado</td>
         <td>$fecha_realizada</td>
  		</tr>"  ;

  


}

echo "</table>";

?>

?>