
/*session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: login.php");

}else{

    echo "<h1> BIENVENIDO $sesion </h1><br>";

    echo "<a href='logica/salir.php'>Salir</a>";
}
?>
*/

<html>

    <body>
 <label>Agregar Tarea.
   
   <input type="button" onclick="location='ingresoTareas.php'" />

 </label>
</br>
<label>Modificar tareas/Borrar Tareas
 
</label>
<input type="button" onclick="location='todasTareas.php'" /> 
</br>

</label>Tareas pendientes
<input type="button" onclick="location='tareasPendientes.php'" /> 
</br>


</label>Tareas Finalizadas
<input type="button" onclick="location='tareasFinalizadas.php'" /> 
</br>

<label>registrar usuario
 
</label>
<input type="button" onclick="location='registracion.html'" />


</label>Filtrar Tareas
<input type="button" onclick="location='filtro.php'" /> 
</br>

    

</body>

</html>