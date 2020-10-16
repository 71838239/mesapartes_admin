<?php 
namespace Modelo;
class usuarioModelo
{
	 private $DNI;
	 private $nombres;
	 private $apellidoPaterno;
	 private $apellidoMaterno;
	 private $email;
	 private $telefono;
	 private $direccion;
	 private $rol;
	 private $contrasenia;
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
	 	$sql = "SELECT * FROM usuarios";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO Tecnicos (idTecnico,nombres,apellidos,dni,direccion,celular,email,usuario,contrasenia,cargo) 
	 			VALUES (null,'{$this->nombre}','{$this->apellido}','{$this->dni}','{$this->direccion}','{$this->celular}','{$this->email}','{$this->usuario}','{$this->contrasenia}','{$this->cargo}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Tecnicos where idTecnico = '{$this->idTecnico}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Tecnicos SET nombres = '{$this->nombre}', apellidos = '{$this->apellido}', dni = '{$this->dni}', direccion = '{$this->direccion}', celular = '{$this->celular}', email = '{$this->email}', usuario = '{$this->usuario}', contrasenia = '{$this->contrasenia}' WHERE idTecnico = '{$this->idTecnico}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Tecnicos WHERE idTecnico = '{$this->idTecnico}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function validate_user() {
	 	$sql = "SELECT * FROM usuarios WHERE DNI = '{$this->DNI}' AND contrasenia = '{$this->contrasenia}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }
}