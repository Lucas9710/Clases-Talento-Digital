<?php
    
 $filtro = "";
 $tipoDeTarea = "";
 $filtro2= "";

if (isset($_GET['tarea']) == true){    

    $filtro = $_GET['tarea'];  

}
if (isset($_GET['tipoDeTarea']) == true){    

    $tipoDeTarea = $_GET['tarea'];  

}

if($tipoDeTarea == 2){
    $filtro2 = "AND realizada ='si'";
}
if($tipoDeTarea == 3){
    $filtro2 = "AND realizada ='no'";
}
 $conexion = mysqli_connect("localhost", "root", "", "tododb");
$sql = "SELECT* FROM tareas WHERE tarea LIKE '%$filtro%'$filtro2";




$respuesta= mysqli_query($conexion, $sql);
if($respuesta == true){
    echo "se logro la consulta";
    
}else{
    echo "No se logro la consulta";

}
if ( $respuesta  ==  false){

    die("No hay datos");

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
    
    