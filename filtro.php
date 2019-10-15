<?php

    
 $filtro = $_GET['tarea'];


 $conexion = mysqli_connect("localhost", "root", "", "tododb");
$sql = "SELECT* FROM tareas WHERE tarea LIKE '%$filtro%'";
$respuesta= mysqli_query($conexion, $sql);


if($respuesta == true){
    echo "se logro la consulta";
    
}else{
    echo "No se logro la consulta";
}
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
    </tr>  ";
}

echo "</table>";

?>
    
    
