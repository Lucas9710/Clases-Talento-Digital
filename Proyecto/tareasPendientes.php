<?php
$conexion = mysqli_connect("localhost", "root", "", "tododb");
$sql = "SELECT * from tareas where realizada ='no'";
$respuesta = mysqli_query($conexion, $sql);
echo "<table>
			<tr>
			   <th>id</th>
			   <th>tarea</th>
			   <th>realizada</th>
			   <th>fecha</th>
			</tr>"; 
while($registro = mysqli_fetch_array($respuesta)){
$id = $registro ["id"];
$tarea = $registro ["tarea"];
$realizada = $registro ["realizada"];
$fecha = $registro ["fecha"];
  echo "
  		<tr>
  		   <td> $id</td>
  		   <td>$tarea</td>
  		   <td>$realizada</td>
  		   <td>$fecha</td>
  		</tr>"  ;
  
}
echo "</table>";


?>