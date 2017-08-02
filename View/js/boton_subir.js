$(document).ready(function(){
 
	$('.boton_subir').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.boton_subir').slideDown(500);
		} else {
			$('.boton_subir').slideUp(500);
		}
	});
 
});