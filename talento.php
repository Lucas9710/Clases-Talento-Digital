<?php

$conexion = mysqli_connect("localhost", "root", "", "agenda");

$sql = "SELECT* from contacto";
$respuesta = mysqli_query($conexion, $sql);

echo "<table>
			<tr>
			   <th>nombre</th>
			   <th>apellido</th>
			</tr>"; 


while($registro = mysqli_fetch_array($respuesta)){
$nombre = $registro ["nombre"];
$apellido = $registro ["apellido"];

  echo "
  		<tr>
  		   <td> $nombre</td>
  		   <td>$apellido</td>
  		</tr>"  ;

  


}

echo "</table>";

?>