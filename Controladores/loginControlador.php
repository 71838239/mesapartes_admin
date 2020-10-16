<?php namespace Controladores;
use Modelo\usuarioModelo as Usuario;

class loginControlador {
	private $sesion;

	public function __construct() {
		$this->sesion = new Usuario();
	}

	public function index(){
		
		if ($_POST) {
			$this->sesion->set("DNI",$_POST['DNI']);
			$this->sesion->set("contrasenia",$_POST['contrasenia']);
			$datos = $this->sesion->validate_user();

			
				//session_start();
				$_SESSION['usuario'] = $datos['DNI'];
				$_SESSION['contrasenia'] =$datos['contrasenia'];
				switch ($datos['rol']) {
					case 'AtencionCliente':
						header ("Location: ".URL."Solicitud");
						break;
					case 'Tecnico':
						$_SESSION['idtec'] = $datos['idTecnico'];
						header ("Location: ".URL."Produccion/index/".$_SESSION['idtec']);
						break;
					default:
						session_destroy();
						$datos = "Usuario o contraseña incorrecto";
						return $datos;
						break;
				}	
			
			//return $datos;
		}
	}

	public function logout() {
		//session_start();
		session_destroy();
		header ("Location: ".URL);
		exit;
	}
}
