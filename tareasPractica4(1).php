//genera un archivo php que muestre las tareas pendientes

<?php

$conexion = mysqli_connect("localhost", "root", "", "tareas");
$sql = "SELECT * from tareas where estado ='en proceso'";
$respuesta = mysqli_query($conexion, $sql);

echo "<table>
			<tr>
			   <th>id</th>
			   <th>tipo</th>
			   <th>tarea</th>
			   <th>estado</th>
			</tr>"; 


while($registro = mysqli_fetch_array($respuesta)){
$id = $registro ["id"];
$tipo = $registro ["tipo"];
$tarea = $registro ["tarea"];
$estado = $registro ["estado"];

  echo "
  		<tr>
  		   <td> $id</td>
  		   <td>$tipo</td>
  		   <td>$tarea</td>
  		   <td>$estado</td>
  		</tr>"  ;

  


}

echo "</table>";

?>

?>