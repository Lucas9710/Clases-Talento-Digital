<?php 



	if(isset($_POST['nombreDeUsuario']) == false) {
		die("error isset por nombre");
	}

	if(empty($_POST['nombreDeUsuario']) == true) {
        die("error empty");
	}

	if(isset($_POST['nombreCompleto']) == false) {
		die("error isset por usuario");
	}

	if(empty($_POST['nombreCompleto']) == true) {
		die("error empty");
	}

	if(isset($_POST['password']) == false) {
		die("error isset pass");
	}

	if(empty($_POST['password']) == true) {
		die("error empty");
    }

    if(isset($_POST['email']) == false) {
		die("error isset POR EMAIL");
	}

	if(empty($_POST['email']) == true) {
		die("error empty");
	}


   
$nombreDeUsuario = trim($_POST["nombreDeUsuario"]);
$pass = trim($_POST["password"]);
$email = trim($_POST["email"]);
$nombreCompleto = trim($_POST["nombreCompleto"]);	
$passwordEncriptado = password_hash("$pass", PASSWORD_BCRYPT);
$fecha = date("d/m/y");
$lenNombreDeUsuario = strlen($nombreDeUsuario);
$lenPassword = strlen($pass);
$lenEmail = strlen($email);
$lenNombreCompleto = strlen($nombreCompleto);

    if($lenNombreDeUsuario == 0 || $lenPassword == 0 || $lenEmail == 0 || $lenNombreCompleto ==0){
      
        die("no puede ingresar datos en blanco");
    } 


    $conexion = mysqli_connect("localhost", "root", "", "tododb");
    $sql = "insert into usuariosTodo (nombre, usuario, pass, email, fechaRegistro) values ('$nombreCompleto','$nombreDeUsuario','$passwordEncriptado','$email','$fecha')";

    $respuesta_consulta = mysqli_query($conexion, $sql);
    if($respuesta_consulta == false){
        die("No se pudo ingresar el registro en la base de datos");
    }
    echo "Registro ingresado ;-)";

?>