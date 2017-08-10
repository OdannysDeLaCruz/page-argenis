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
		$sql = "SELECT * FROM videos  
				WHERE id_v = '$id_v'";

		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array());

		// //Almacenar el array en resultado
		$misVideos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		// //Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

		return $misVideos;
	}

	public function editarTablaContenido($titulo,$subtitulo,$mensaje,$id_c)
	{

		$sql = "UPDATE contenido SET titulo=:titulo, subtitulo=:subtitulo, mensaje=:mensaje WHERE id_c=:id_c";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":titulo"=>$titulo,":subtitulo"=>$subtitulo,":mensaje"=>$mensaje,":id_c"=>$id_c));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

	}

	public function editarOpiniones($opinion,$opinador,$id_o)
	{

		$sql = "UPDATE opiniones SET opinion=:opinion, opinador=:opinador WHERE id_o=:id_o";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":opinion"=>$opinion,":opinador"=>$opinador,":id_o"=>$id_o));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

	}

	public function editarVideos($titulo,$url,$id_v)
	{

		$sql = "UPDATE videos SET titulo=:titulo, url=:url WHERE id_v=:id_v";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":titulo"=>$titulo,":url"=>$url,":id_v"=>$id_v));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

	}

	public function editarContacto($tel,$nomb_usu,$id)
	{
 
		$sql = "UPDATE contacto SET tel=:tel, nomb_usu=:nomb_usu WHERE id=:id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":tel"=>$tel,":nomb_usu"=>$nomb_usu,":id"=>$id));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

	}

	public function subirImg($imagen_nombre,$imagen_tmp,$imagen_error)
	{

		if ((isset($imagen_nombre) && ($imagen_error == UPLOAD_ERR_OK))) 
		{

			$destino_de_ruta = "../View/img/";
			//ruta de la carpeta destino en servidor

			//Movemos la imagen del directorio temporal a la carpeta destino

			move_uploaded_file($imagen_tmp,$destino_de_ruta.$imagen_nombre);

			echo "El archivo " . $imagen_nombre . " se ha cargado correctamente";

		}

		elseif ($imagen_error)
		{

			switch ($imagen_error) 

			{

				case 1:	//El fichero subido excede la directiva upload_max_filesize de php.ini.

					echo "El fichero subido excede el tamaño permitido.";
					break;

				case 2://El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.

					echo "El fichero subido excede el tamaño permitido.";
					break;
				case 3: //El fichero fue sólo parcialmente subido. 

					echo "El envio del archivo fue interrumpida, intentelo de nuevo";
					break;

				case 4: //No se subió ningún fichero.

					echo "No se subió ningún fichero.";
					break;

			}
		}
	}

	public function subirImagen($imagen,$id)
	{
		echo $imagen . $id;

		$sql = "UPDATE imagenes_cargadas SET nombre_imagen=:nombre_imagen WHERE id=:id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":nombre_imagen"=>$imagen,":id"=>$id));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();

	}




}



 ?>