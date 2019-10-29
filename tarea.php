<?php 

class Tarea {
	public $tarea;
    public $fecha;

	private function realizar() {
    	echo "realizo la tarea " . $this->tarea;
    	echo "en la fecha" . $this->fecha;
    }

    public function realizando() {
    	$this->realizar();
    }
}
$unaTarea = new Tarea();
// echo "<pre>";
// var_dump($unTelefono);
// echo "</pre>";

$unaTarea->tarea = "Ir a trabajar";
$unaTarea->fecha = "12/10/2019";

$unaTarea->realizando();
// echo "<pre>";
// var_dump($unTelefono);
// echo "</pre>";
?>