<?php namespace Modelo;
class solicitudModelo
{
	 private $idSolicitud;
	 private $fechaRegistro;
	 private $otorgadoX;
	 private $aFavor;
	 private $fechaDoc;
	 private $docEncontrado;
	 private $comentarios;
	 private $pathVoucher;
	 private $fechaPago;
	 private $fechaEntrega;
	 private $codAcceso;
	 private $Estados_idEstado;
	 private $Notarios_RUC;
	 private $Solicitantes_DNI;
	 private $Usuarios_DNI;
	 private $con;

	 public function __construct()
	 {
	 	$this->con = new Conexion();
	 }
	
	 public function set($atributo, $contenido)
	 {
	 	$this->$atributo = $contenido;
	 }

	 public function get($atributo)
	 {
	 	return $this->$atributo;
	 }

	 public function listar()
	 {
	 	$sql = "SELECT * FROM solicitudes AS slctd INNER JOIN estados AS est ON slctd.Estados_idEstado = est.idEstado";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	/*$sql = "";
	 	$this->con->consultaSimple($sql);*/
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE solicitudes SET docEncontrado = '{$this->docEncontrado}', comentarios = '{$this->comentarios}', 
	 			Estados_idEstado = '{$this->Estados_idEstado}' WHERE idSolicitud = '{$this->idSolicitud}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM solicitudes AS slctd INNER JOIN estados AS est ON slctd.Estados_idEstado = est.idEstado 
				WHERE slctd.idSolicitud = '{$this->idSolicitud}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

}