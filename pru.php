<?php
class Operaciones{
	public function sumar($a,$b){
	return	 $a + $b;

	}

	public function restar($a,$b){
	return	 $a - $b;
	}
	public function multiplicar($a,$b){
	return	 $a * $b;
	}
	public function dividir($a,$b){
	if($b == 0){
		echo "no se puede dividir un numero por 0"
	}
	else{
		return	$a / $b;
	}
	

	}

}

$operacion = new Operaciones();

$resultado = $operacion->sumar(2,2);
echo "el resultado es: $resultado";
$resultado1 = $operacion->restar(2,2);
echo "el resultado es: $resultado1";
$resultado2 = $operacion->multiplicar(2,2);
echo "el resultado es: $resultado2";
$resultado3 = $operacion->dividir(2,2);
echo "el resultado es: $resultado3";



?>