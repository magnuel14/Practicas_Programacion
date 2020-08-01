$(document).ready(function(){
	$('#btn1').click(function(){
		$('#identificador1').hide();
	});

	$('#btn2').click(function(){
		$('#identificador1').show();
	});

	$('#btn3').click(function(){
		$('#identificador2').hide(1000);// 1 segudno
	});

	$('#btn4').click(function(){
		$('#identificador2').show(1000);
	});


	$('#identificador3').click(function(){
		alert("Un click");
	});
	$('#identificador4').dblclick(function(){
		alert("dos click");
	});

	$('#identificador5').mouseenter(function(){
		alert("mouse enter");
	});
	$('#identificador6').mouseeleave(function(){
		alert("mouse eleave");
	});

	$('#entrada1').keypress(function(){
		$('#identificador7').css("background-color","stellblue");
	});


	$('#entrada2').keydow(function(){
		$('#identificador8').css("color","green");
	});





});