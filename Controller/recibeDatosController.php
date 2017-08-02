<?php 

error_reporting(E_ALL ^ E_NOTICE);

if ($_POST) {

	// Variables de la seccion header
	
	$id_header = $_POST['id_header'];
	$titulo_header         = $_POST['titulo-header'];
	$subtitulo_header      = $_POST['subtitulo-header'];
	$mensaje_header        = $_POST['mensaje-header'];
	$titulo_video_header_1 = $_POST['titulo-video-header-1'];
	$url_video_header_1    = $_POST['url-video-header-1'];
	$titulo_video_header_2 = $_POST['titulo-video-header-2'];
	$url_video_header_1    = $_POST['url-video-header-2'];
	$imagen_header_fondo   = $_FILES['imagen-header-fondo']['name'];

	// Variables de la seccion tipo de evento

	$id_tipo_evento = $_POST['id_tipo_evento'];
	$titulo_tipo_evento  = $_POST['titulo-tipo-evento'];
	$mensaje_tipo_evento = $_POST['mensaje-tipo-evento'];

	// Variables de la seccion 5 musicos

	$id_cinco_musicos = $_POST['id_cinco_musicos'];
	$titulo_cinco_musicos    = $_POST['titulo-cinco-musicos'];
	$subtitulo_cinco_musicos = $_POST['subtitulo-cinco-musicos'];
	$listado_cinco_musicos   = $_POST['listado-cinco-musicos'];
	$imagen_cinco_musicos    = $_FILES['imagen-cinco-musicos']['name'];

	$titulo_video_cinco_musicos_1 = $_POST['titulo-video-cinco-musicos-1'];
	$url_video_cinco_musicos_1 = $_POST['url-video-cinco-musicos-1'];

	$titulo_video_cinco_musicos_2 = $_POST['titulo-video-cinco-musicos-2'];
	$url_video_cinco_musicos_2 = $_POST['url-video-cinco-musicos-2'];

	$titulo_video_cinco_musicos_3 = $_POST['titulo-video-cinco-musicos-3'];
	$url_video_cinco_musicos_3 = $_POST['url-video-cinco-musicos-3'];

	// Variables de la seccion grupo completo

	$id_grupo_completo = $_POST['id_grupo_completo'];
	$titulo_grupo_completo    = $_POST['titulo-grupo-completo'];
	$subtitulo_grupo_completo = $_POST['subtitulo-grupo-completo'];
	$listado_grupo_completo   = $_POST['listado-grupo-completo'];
	$imagen_grupo_completo    = $_FILES['imagen-grupo-completo']['name'];

	$titulo_video_grupo_completo_1 = $_POST['titulo-video-grupo-completo-1'];
	$url_video_grupo_completo_1 = $_POST['url-video-grupo-completo-1'];

	$titulo_video_grupo_completo_2 = $_POST['titulo-video-grupo-completo-2'];
	$url_video_grupo_completo_2 = $_POST['url-video-grupo-completo-2'];

	$titulo_video_grupo_completo_3 = $_POST['titulo-video-grupo-completo-3'];
	$url_video_grupo_completo_3 = $_POST['url-video-grupo-completo-3'];

	// variables de la seccion vallenato con guitarra


	$id_vallenato_guitarra = $_POST['id_vallenato_guitarra'];
	$titulo_vallenato_guitarra    = $_POST['titulo-vallenato-guitarra'];
	$subtitulo_vallenato_guitarra = $_POST['subtitulo-vallenato-guitarra'];
	$listado_vallenato_guitarra   = $_POST['listado-vallenato-guitarra'];
	$imagen_vallenato_guitarra    = $_FILES['imagen-vallenato-guitarra']['name'];

	$titulo_video_vallenato_guitarra_1 = $_POST['titulo-video-vallenato-guitarra-1'];
	$url_video_vallenato_guitarra_1 = $_POST['url-video-vallenato-guitarra-1'];

	$titulo_video_vallenato_guitarra_2 = $_POST['titulo-video-vallenato-guitarra-2'];
	$url_video_vallenato_guitarra_2 = $_POST['url-video-vallenato-guitarra-2'];

	$titulo_video_vallenato_guitarra_3 = $_POST['titulo-video-vallenato-guitarra-3'];
	$url_video_vallenato_guitarra_3 = $_POST['url-video-vallenato-guitarra-3'];

	// variable de la seccion mas temas 

	$id_mas_temas = $_POST['id_mas_temas'];
	$titulo_mas_temas = ['titulo-mas-temas'];
	$imagen_mas_temas = $_FILES['imagen-mas-temas']['name'];

	$titulo_video_mas_temas_1 = $_POST['titulo-video-mas-temas-1'];
	$url_video_mas_temas_1    = $_POST['url-video-mas-temas-1'];

	$titulo_video_mas_temas_2 = $_POST['titulo-video-mas-temas-2'];
	$url_video_mas_temas_2    = $_POST['url-video-mas-temas-2'];

	$titulo_video_mas_temas_3 = $_POST['titulo-video-mas-temas-3'];
	$url_video_mas_temas_3    = $_POST['url-video-mas-temas-3'];

	$titulo_video_mas_temas_4 = $_POST['titulo-video-mas-temas-4'];
	$url_video_mas_temas_4    = $_POST['url-video-mas-temas-4'];

	$titulo_video_mas_temas_5 = $_POST['titulo-video-mas-temas-5'];
	$url_video_mas_temas_5    = $_POST['url-video-mas-temas-5'];

	$titulo_video_mas_temas_6 = $_POST['titulo-video-mas-temas-6'];
	$url_video_mas_temas_6    = $_POST['url-video-mas-temas-6'];



	// variables de la seccion opinion clientes

	$id_opinion_clientes = $_POST['id_opinion_clientes'];
	$titulo_opinion_clientes = $_POST['titulo-opinion-clientes'];

	$opinador_1 = $_POST['opinador-1'];
	$opinion_1 = $_POST['opinion_1'];

	$opinador_2 = $_POST['opinador_2'];
	$opinion_2 = $_POST['opinion_2'];

	$opinador_3 = $_POST['opinador-3'];
	$opinion_3 = $_POST['opinion_3'];


	// Variables de la seccion redes sociales

	$id_redes = $_POST['id_redes'];
	// titulo de esta seccion
	$titulo_red_social = $_POST['titulo-red-social'];

	$red_social_1 = $_POST['red-social-1'];
	$imagen_red_social_1 = $_FILES['imagen-red-social-1']['name'];

	$red_social_2 = $_POST['red-social-2'];
	$imagen_red_social_2 = $_FILES['imagen-red-social-2']['name'];

	$red_social_3 = $_POST['red-social-3'];
	$imagen_red_social_3 = $_FILES['imagen-red-social-3']['name'];

	$red_social_4 = $_POST['red-social-4'];
	$imagen_red_social_4 = $_FILES['imagen-red-social-4']['name'];

}




 ?>