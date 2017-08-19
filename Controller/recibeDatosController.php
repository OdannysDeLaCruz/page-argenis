<?php 
include_once('../Model/procesarDatosModel.php');
$objeto = new procesarDatos();


error_reporting(E_ALL ^ E_NOTICE);

if ($_POST) {

	// Variables de la seccion header
	
	$id_header = $_POST['id_header'];
	$titulo_header         = $_POST['titulo-header'];
	$subtitulo_header      = $_POST['subtitulo-header'];
	$mensaje_header        = $_POST['mensaje-header'];

	$objeto->editarTablaContenido($titulo_header,$subtitulo_header,$mensaje_header,$id_header);
	
	$titulo_video_header_1 = $_POST['titulo-video-header-1'];
	$url_video_header_1    = $_POST['url-video-header-1'];

	$titulo_video_header_2 = $_POST['titulo-video-header-2'];
	$url_video_header_2    = $_POST['url-video-header-2'];

	$objeto->editarVideos($titulo_video_header_1,$url_video_header_1,1);
	$objeto->editarVideos($titulo_video_header_2,$url_video_header_2,2);

	$imagen_header = $_POST['imagen-header-fondo'];

	// Variables de la seccion tipo de evento

	$id_tipo_evento = $_POST['id_tipo_evento'];
	$titulo_tipo_evento  = $_POST['titulo-tipo-evento'];
	$mensaje_tipo_evento = $_POST['mensaje-tipo-evento'];

	$objeto->editarTablaContenido($titulo_tipo_evento,null,$mensaje_tipo_evento,$id_tipo_evento);

	// Variables de la seccion 5 musicos

	$id_cinco_musicos = $_POST['id_cinco_musicos'];
	$titulo_cinco_musicos    = $_POST['titulo-cinco-musicos'];
	$subtitulo_cinco_musicos = $_POST['subtitulo-cinco-musicos'];
	$listado_cinco_musicos   = $_POST['listado-cinco-musicos'];

	$objeto->editarTablaContenido($titulo_cinco_musicos,$subtitulo_cinco_musicos,$listado_cinco_musicos,$id_cinco_musicos);

	$titulo_video_1 = $_POST['titulo-video-cinco-1'];
	$url_video_1    = $_POST['url-video-cinco-1'];

	$objeto->editarVideos($titulo_video_1,$url_video_1,3);

	$titulo_video_cinco_2 = $_POST['titulo-video-cinco-2'];
	$url_video_cinco_2    = $_POST['url-video-cinco-2'];

	$objeto->editarVideos($titulo_video_cinco_2,$url_video_cinco_2,4);
	
	$titulo_video_cinco_3 = $_POST['titulo-video-cinco-3'];
	$url_video_cinco_3    = $_POST['url-video-cinco-3'];

	$objeto->editarVideos($titulo_video_cinco_3,$url_video_cinco_3,5);

	$imagen_cinco_musicos  = $_POST['imagen-cinco-musicos'];

	// Variables de la seccion grupo completo

	$id_grupo_completo = $_POST['id_grupo_completo'];
	$titulo_grupo_completo    = $_POST['titulo-grupo-completo'];
	$subtitulo_grupo_completo = $_POST['subtitulo-grupo-completo'];
	$listado_grupo_completo   = $_POST['listado-grupo-completo'];

	$objeto->editarTablaContenido($titulo_grupo_completo,$subtitulo_grupo_completo,$listado_grupo_completo,$id_grupo_completo);


	$titulo_video_grupo_1 = $_POST['titulo-video-grupo-1'];
	$url_video_grupo_1 = $_POST['url-video-grupo-1'];

	$objeto->editarVideos($titulo_video_grupo_1,$url_video_grupo_1,6);

	$titulo_video_grupo_2 = $_POST['titulo-video-grupo-2'];
	$url_video_grupo_2 = $_POST['url-video-grupo-2'];

	$objeto->editarVideos($titulo_video_grupo_2,$url_video_grupo_2,7);
	
	$titulo_video_grupo_3 = $_POST['titulo-video-grupo-3'];
	$url_video_grupo_3 = $_POST['url-video-grupo-3'];

	$objeto->editarVideos($titulo_video_grupo_3,$url_video_grupo_3,8);

	$imagen_grupo_completo = $_POST['imagen-grupo-completo'];

	// variables de la seccion vallenato con guitarra


	$id_vallenato = $_POST['id-vallenato-guitarra'];
	$titulo_vallenato   = $_POST['titulo-vallenato-guitarra'];
	$subtitulo_vallenato = $_POST['subtitulo-vallenato-guitarra'];
	$listado_vallenato   = $_POST['listado-vallenato-guitarra'];



	$objeto->editarTablaContenido($titulo_vallenato,$subtitulo_vallenato,$listado_vallenato,$id_vallenato);



	$titulo_video_vallenato_1 = $_POST['titulo-video-vallenato-1'];
	$url_video_vallenato_1 = $_POST['url-video-vallenato-1'];

	$objeto->editarVideos($titulo_video_vallenato_1,$url_video_vallenato_1,9);

	$titulo_video_vallenato_2 = $_POST['titulo-video-vallenato-2'];
	$url_video_vallenato_2 = $_POST['url-video-vallenato-2'];

	$objeto->editarVideos($titulo_video_vallenato_2,$url_video_vallenato_2,10);

	$titulo_video_vallenato_3 = $_POST['titulo-video-vallenato-3'];
	$url_video_vallenato_3 = $_POST['url-video-vallenato-3'];

	$objeto->editarVideos($titulo_video_vallenato_3,$url_video_vallenato_3,11);

	$imagen_vallenato_guitarra = $_POST['imagen-vallenato-guitarra'];

	// variable de la seccion mas temas 

	$id_mas_temas = $_POST['id-mas-temas'];
	$titulo_mas_temas = $_POST['titulo-mas-temas'];

	$objeto->editarTablaContenido($titulo_mas_temas,null,null,$id_mas_temas);


	$titulo_video_mas_temas_1 = $_POST['titulo-video-mas-temas-1'];
	$url_video_mas_temas_1    = $_POST['url-video-mas-temas-1'];

	$objeto->editarVideos($titulo_video_mas_temas_1,$url_video_mas_temas_1,12);

	$titulo_video_mas_temas_2 = $_POST['titulo-video-mas-temas-2'];
	$url_video_mas_temas_2    = $_POST['url-video-mas-temas-2'];

	$objeto->editarVideos($titulo_video_mas_temas_2,$url_video_mas_temas_2,13);

	$titulo_video_mas_temas_3 = $_POST['titulo-video-mas-temas-3'];
	$url_video_mas_temas_3    = $_POST['url-video-mas-temas-3'];

	$objeto->editarVideos($titulo_video_mas_temas_3,$url_video_mas_temas_3,14);

	$titulo_video_mas_temas_4 = $_POST['titulo-video-mas-temas-4'];
	$url_video_mas_temas_4    = $_POST['url-video-mas-temas-4'];

	$objeto->editarVideos($titulo_video_mas_temas_4,$url_video_mas_temas_4,15);

	$titulo_video_mas_temas_5 = $_POST['titulo-video-mas-temas-5'];
	$url_video_mas_temas_5    = $_POST['url-video-mas-temas-5'];

	$objeto->editarVideos($titulo_video_mas_temas_5,$url_video_mas_temas_5,16);

	$titulo_video_mas_temas_6 = $_POST['titulo-video-mas-temas-6'];
	$url_video_mas_temas_6    = $_POST['url-video-mas-temas-6'];

	$objeto->editarVideos($titulo_video_mas_temas_6,$url_video_mas_temas_6,17);


	$imagen_mas_temas = $_POST['imagen-mas-temas'];

	// variables de la seccion opinion clientes

	$opinador_1 = $_POST['opinador-1'];
	$opinion_1 = $_POST['opinion-1'];

	$objeto->editarOpiniones($opinion_1,$opinador_1,1);

	$opinador_2 = $_POST['opinador-2'];
	$opinion_2 = $_POST['opinion-2'];

	$objeto->editarOpiniones($opinion_2,$opinador_2,2);

	$opinador_3 = $_POST['opinador-3'];
	$opinion_3 = $_POST['opinion-3'];

	$objeto->editarOpiniones($opinion_3,$opinador_3,3);

	$opinador_4 = $_POST['opinador-4'];
	$opinion_4 = $_POST['opinion-4'];

	$objeto->editarOpiniones($opinion_4,$opinador_4,4);


	// Variables de la seccion redes sociales

	$red_social_1 = $_POST['red-social-1'];
	$objeto->editarContacto(null,$red_social_1,3);
	$imagen_red_social_1 = $_POST['imagen-red-social-1'];


	$red_social_2 = $_POST['red-social-2'];
	$objeto->editarContacto(null,$red_social_2,4);
	$imagen_red_social_2 = $_POST['imagen-red-social-2'];


	$red_social_3 = $_POST['red-social-3'];
	$objeto->editarContacto(null,$red_social_3,5);
	$imagen_red_social_3 = $_POST['imagen-red-social-3'];


	$red_social_4 = $_POST['red-social-4'];
	$objeto->editarContacto(null,$red_social_4,6);
	$imagen_red_social_4 = $_POST['imagen-red-social-4'];


	$numero_tel_1 = $_POST['numero-telefono-1'];
	$objeto->editarContacto($numero_tel_1,null,1);

	$numero_tel_2 = $_POST['numero-telefono-2'];
	$objeto->editarContacto($numero_tel_2,null,2);

	header('location:../View/datosGuardados.php');

}




 ?>