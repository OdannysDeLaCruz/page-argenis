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
	public function selectUsuario()
	{
		$sql = "SELECT * FROM admin";
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
	//Subir imagen a la carpeta (img) del servidor antes de subir a la base de datos
	public function subirImg($imagen_nombre,$imagen_tamano,$imagen_tipo,$imagen_tmp,$imagen_error)
	{
		if ((isset($imagen_nombre) && ($imagen_error == UPLOAD_ERR_OK))) 
		{
			$error = 5; //Exitoso

			if ($imagen_tamano <= 5000000) 
			{
				if ($imagen_tipo == "image/jpeg" || $imagen_tipo == "image/jpg" || $imagen_tipo == "image/png") 
				{
				
					$destino_de_ruta = "../View/img/";;
					//ruta de la carpeta destino en servidor

					//Movemos la imagen del directorio temporal a la carpeta destino

					move_uploaded_file($imagen_tmp,$destino_de_ruta.$imagen_nombre);

					return $error; //Exitoso

				}
				else
				{
					return $error = 6; //tipo de archivo erroneo
				}				
			}
			else
			{
				return $error = 7;//Tamaño de archivo excedido
			}
		}

		elseif ($imagen_error)
		{
			switch ($imagen_error) 

			{
				case 1:	//El fichero subido excede la directiva upload_max_filesize de php.ini.

					// echo "El fichero subido excede el tamaño permitido.";
					return $imagen_error;
					break;

				case 2://El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.

					// echo "El fichero subido excede el tamaño permitido.";
					return $imagen_error;
					break;
				case 3: //El fichero fue sólo parcialmente subido. 

					// echo "El envio del archivo fue interrumpida, intentelo de nuevo";
					return $imagen_error;
					break;

				case 4: //No se subió ningún fichero.

					// echo "No se subió ningún fichero.";
					return $imagen_error;
					break;
			}
		}
	}

	//Subir imagen a la carpeta (galeria) del servidor antes de subir a la base de datos
	public function subirGaleria($imagen_nombre,$imagen_tamano,$imagen_tipo,$imagen_tmp,$imagen_error)
	{
		if ((isset($imagen_nombre) && ($imagen_error == UPLOAD_ERR_OK))) 
		{
			$error = 5; //Exitoso

			if ($imagen_tamano <= 5000000) 
			{
				if ($imagen_tipo == "image/jpeg" || $imagen_tipo == "image/jpg" || $imagen_tipo == "image/png") 
				{				
					$destino_de_ruta = '../View/img/galeria/';
					//ruta de la carpeta destino en servidor

					//Movemos la imagen del directorio temporal a la carpeta destino

					move_uploaded_file($imagen_tmp,$destino_de_ruta.$imagen_nombre);

					return $error; //Exitoso

				}
				else
				{
					return $error = 6; //tipo de archivo erroneo
				}
				
			}
			else
			{
				return $error = 7;//Tamaño de archivo excedido
			}

		}

		elseif ($imagen_error)
		{
			switch ($imagen_error) 
			{
				case 1:	//El fichero subido excede la directiva upload_max_filesize de php.ini.

					// echo "El fichero subido excede el tamaño permitido.";
					return $imagen_error;
					break;

				case 2://El fichero subido excede la directiva MAX_FILE_SIZE especificada en el formulario HTML.

					// echo "El fichero subido excede el tamaño permitido.";
					return $imagen_error;
					break;
				case 3: //El fichero fue sólo parcialmente subido. 

					// echo "El envio del archivo fue interrumpida, intentelo de nuevo";
					return $imagen_error;
					break;

				case 4: //No se subió ningún fichero.

					// echo "No se subió ningún fichero.";
					return $imagen_error;
					break;
			}
		}
	}
	//Borrar la imagen de la carpeta (galeria) del servidor antes de eliminar de la base de datos
	public function borrarImagenServidor($id)
	{	
		$sql = "SELECT imagen FROM galeria WHERE id = :id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->bindParam(':id',$id);
		$sentencia->execute();

		$imagen = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		$sentencia->closeCursor();

		// return $datos;


		foreach ($imagen as $img) {

			$destino_de_ruta = 'View/img/galeria/';
			
			if (unlink($destino_de_ruta.$img['imagen']))
			{
				echo "Exito";
			}
			else
			{
				echo "Error";
			}

		}
	}

	//Insertar imagen a la base datos
	public function insertarGaleria($imagen)
	{
		$sql = "INSERT INTO galeria (imagen) VALUES (:imagen)";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->bindParam(':imagen',$imagen);
		$sentencia->execute();

		$sentencia->closeCursor();
	}

	//Eliminar el (nombre) de la imagen de la base de datos segun su id
	public function eliminarGaleria($id)
	{
		$sql = "DELETE FROM galeria WHERE id=:id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->bindParam(':id',$id);
		$sentencia->execute();
		$sentencia->closeCursor();
	}

	//Actualizar el (nombre) de la imagen de secciones y logos de redes sociales en la base de datos
	public function actualizarImg($imagen,$id)
	{
		$sql = "UPDATE imagenes_cargadas SET nombre_imagen=:nombre_imagen WHERE id=:id";
		$sentencia = $this->conn->prepare($sql);
		$sentencia->execute(array(":nombre_imagen"=>$imagen,":id"=>$id));

		//Cerrar el cursor de la tabla virtual
		$sentencia->closeCursor();
	}
	//Seleccionar el (nombre) de la imagen de una (tabla) segun su id,
	//Si no se le envia un id, se seleccionan todos los datos de la tabla
	public function seleccionarImagen($tabla,$id)
	{
		if ($id != null)
		{
			$sql = "SELECT * FROM $tabla WHERE id = $id";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute(array());

			$misDatos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

			return $misDatos;

			$sentencia->closeCursor();
		}
		else
		{
			$sql = "SELECT * FROM $tabla";
			$sentencia = $this->conn->prepare($sql);
			$sentencia->execute(array());

			$misDatos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

			return $misDatos;

			$sentencia->closeCursor();
		}

		
	}




}



 ?>