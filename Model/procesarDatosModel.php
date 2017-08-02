<?php 
include_once ('conexion.php');

class procesarDatos extends Conexion {

	public function __construct()
	{
		parent::__construct();
	}

	public function seleccionar($tabla=null,$nomId,$id)
	{
		$sql = "SELECT * FROM $tabla WHERE $nomId = $id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array());

		// //Almacenar el array en resultado
		$misDatos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		// //Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

		return $misDatos;

		//Cerrar conexion
		$this->conn = null;
	}
	
	public function seleccionarVideos($id_v)
	{
		$sql = "SELECT *FROM videos  
				WHERE id_v = '$id_v'";

		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array());

		// //Almacenar el array en resultado
		$misVideos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		// //Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

		return $misVideos;

		//Cerrar conexion
		$this->conn = null;
	}

	public function Actualizar()
	{

	}
}



 ?>