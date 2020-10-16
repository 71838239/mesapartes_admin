<?php namespace Controladores;
use Modelo\solicitudModelo as Solicitud;

class solicitudControlador {
	private $solicitud;

	public function __construct() {
		$this->solicitud = new Solicitud();
	}

	public function index(){
		
		$datos = $this->solicitud->listar();
		return $datos;
	}

	public function logout() {
		//session_start();
		session_destroy();
		header ("Location: ".URL);
		exit;
	}

	public function verSolicitudVista($idSolicitud) {
		$this->solicitud->set("idSolicitud",$idSolicitud);
		$datos = $this->solicitud->view();
		return $datos;
	}

	public function editarSolicitudVista($idSolicitud) {
		
		if (!$_POST) {
			$this->solicitud->set("idSolicitud",$idSolicitud);
			$datos = $this->solicitud->view();
			return $datos;
		} else {
			
			switch ($_POST['Estados_idEstado']) {
				case 'PROCCANC':
					$this->solicitud->set("idSolicitud",$idSolicitud);
					$this->solicitud->set("Estados_idEstado",$_POST['Estados_idEstado']);
					$this->solicitud->set("docEncontrado",0);
					$this->solicitud->set("comentarios",$_POST['comentarios']);
					$this->solicitud->edit();
					break;
				case 'ESPPAGO':
					$this->solicitud->set("idSolicitud",$idSolicitud);
					$this->solicitud->set("Estados_idEstado",$_POST['Estados_idEstado']);
					$this->solicitud->set("docEncontrado",1);
					$this->solicitud->set("comentarios",$_POST['comentarios']);
					$this->solicitud->edit();
					break;
				case 'PROCEMIS':
					$this->solicitud->set("idSolicitud",$idSolicitud);
					$this->solicitud->set("Estados_idEstado",$_POST['Estados_idEstado']);
					$this->solicitud->edit();
					break;
				default:
					# code...
					break;
			}
			
			header ("Location: ".URL."Solicitud");
		}
		
	}
}
