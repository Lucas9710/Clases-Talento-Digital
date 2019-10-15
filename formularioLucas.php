<?php
    

 $conexion = mysqli_connect("localhost:3307", "root", "", "tododb");
$sql = "SELECT * FROM tareas";
$respuesta= mysqli_query($conexion, $sql);
echo "
    <table>
    <tr>
      <th>id</th>
      <th>tarea</th>
      <th>realizada</th>
      <th>fecha</th>
    </tr>  
";
while($registro = mysqli_fetch_array($respuesta)){

$id = $registro ["id"];
$tarea = $registro ["tarea"];
$realizada = $registro ["realizada"];
$fecha = $registro ["fecha"];
echo "    <th>$id</th>
      <th>$tarea</th>
      <th>$realizada</th>
      <th>$fecha</th>
      <td>
 <a href='editarLucas.php?id=$id'>Editar</a>
 </td>

      
    </tr>  ";
}
echo "</table>";
?>