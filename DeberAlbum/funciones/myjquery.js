$(document).ready(function () {
	$('#btn1').click(function () {
		$('#fondomenu').toggle('fast');
	});	

});
$(window).resize(function () {
	$("#width").text($(this).width());
	$("#height").text($(this).height());

	var ancho = $(this).width();
	if (ancho > 600) {
		$('#fondomenu').css('display', 'block')

	} else {

		$('#fondomenu').css('display', 'none')

	}

});




