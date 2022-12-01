<?php 

class Producto
{
	
	function __construct()
	{
		require_once("conexion.php");
		$this->conexion= new Conexion();
	}

	function mostrar()
	{
		$consulta="SELECT * FROM productos ORDER BY nombre ASC";
		$datos=$this->conexion->returnConsulta($consulta);
		return $datos;
	}
	function mostrarid($id){
		$consulta="SELECT * FROM productos WHERE id='{$id}'";
		$datos=$this->conexion->returnConsulta($consulta);
		return $datos;
	}
	function mostrartablas()
	{
		$consulta="SELECT * FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'delicola';";
		$datos=$this->conexion->returnConsulta($consulta);
		return $datos;
	}
	
}
 ?>