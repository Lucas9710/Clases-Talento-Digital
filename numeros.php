<?php
 
 

 if(isset($_POST ["numero1"]) && isset($_POST ["numero2"]) && isset($_POST ["numero3"]) == false ){

 	echo "no me mandaste lo necesario";
 	die();
 }

if(empty($_POST ["numero1"]) && isset($_POST ["numero2"]) && isset($_POST ["numero3"]) == true){

	echo "no enviaste la edad";
	die();
}else {
	$numero1 = $_POST ["numero1"]
	$numero2 = $_POST ["numero2"]
	$numero3 = $_POST ["numero3"]

	if(numero1 > numero2 && numero1 > numero3){
		echo "numero1 es el mayor";
	} else if(numero2 > numero1 && numero2 > numero3){
		echo "numero2 es mayor";
	}else if(numero3 > numero1 && numero3 > numero1){
		echo "numero 3 es el mayor";
	}
}

 

 ?>