<?php
require_once 'ModeloBase.php';

class Usuarios extends ModeloBase {
	public $nombre;
	public $apodo;
	public $correo;
	public $password;

	public function __construct() {
		parent::__construct();
	}

	function getNombre() {
		return $this->nombre;
	}

	function getCorreo() {
		return $this->correo;
	}

	function getPassword() {
		return $this->password;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setCorreo($correo) {
		$this->correo = $correo;
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function guardarUsuarios($datos) {
		$db = new ModeloBase();
		$datos['id_rol'] = 2;
		$insertar = $db->insertar('usuarios', $datos);
		#$_SESSION['varible'] = 'valor';
		if ($insertar == true) {
			$_SESSION['mensaje'] = 'Registro exitoso';
		}
	}

	public function accesoUsuarios($apodo, $password) {

		$db = new ModeloBase();
		$query = "SELECT * FROM usuarios WHERE apodo = '".$apodo. "' AND password = '".$password . "'";
		return $respuesta = $db->consultarRegistro($query);
	}

}
