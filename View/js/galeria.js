$('.galeria__img').click(function(e){

	var img = e.target.src;
	var modal = '<div class="modal"><img src="' + img + '" alt="Imagen de Argenis Contreras Vallenato" class="modal__img"><div class="modal__boton">X</div></div>';

	// Agregamos el modal al body

	$('body').append(modal);

	// Remover el modal del Body
	$('.modal__boton').click(function(){
		$('.modal').remove();
	});

})

$(document).keyup(function(e){
  if (e.which==27) {
    $('.modal').remove();
  }
})
