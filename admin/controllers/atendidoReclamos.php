<?php
class AtendidosReclamos extends Controlador
{
	
	function __construct()
	{

	}

	function mostrarVista()
	{
		$nombre = "reclamos";
		$fileName = "views/" . $nombre . "/atendidosReclamos.php";
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>