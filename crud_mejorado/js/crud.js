$(document).ready(function () {
	obtenerTareas();
	let modificar = false;
	function obtenerTareas() {
		$.ajax({
			url: 'listar.php',
			type: "GET",
			success: function (response) {
				let usuarios = JSON.parse(response);
				let template = '';
				usuarios.forEach(usuario => {
					template += `
					<tr usuarioId="${usuario.id}">
						<td>${usuario.id}</td>
						<td>
						${usuario.nombre} 
						</td>
						<td>${usuario.apellido}</td>
						<td>
						<a href="#" style="font-size: 9px;"  class="usuario-item">Modificar </a>
						<a href="#" style="font-size: 9px;"  class="usuario-delete btn btn-danger ">¿Quieres eliminar este registro? </a>
						</td>
					
					</tr>
					`
				}); // termina el for
				$('#usuarios').html(template);
			}
		});
	}
	$('#user_form').submit(e => {
		const datos = {
			nombre: $('#first_name').val(),
			apellido: $('#last_name').val(),
			id: $('#usuarioId').val()
		};

		const url = modificar === false ? 'insertar.php' : 'modificar.php';

		$.post(url, datos, (response) => {
			obtenerTareas();
		});
	});
	$(document).on('click', '.usuario-item', (e) => {
		const elemento = $(this)[0].activeElement.parentElement.parentElement;
		const id = $(elemento).attr('usuarioId');
		console.log(id);
		$.post('getTarea.php', { id }, (response) => {
			console.log(response);
			const usuario = JSON.parse(response);

			$('#first_name').val(usuario.nombre);
			$('#last_name').val(usuario.apellido);
			$('#usuarioId').val(usuario.id);
			modificar = true;
		});
	});

	$(document).on('click', '.usuario-delete', (e) => {
		if (confirm('Desea eliminar al Usario')) {
			const elemento = $(this)[0].activeElement.parentElement.parentElement;
			const id = $(elemento).attr('usuarioId');
			$.post('eliminar.php', { id }, (response) => {
				obtenerTareas();
			});
		}
	});
	$('#search').keyup(function () {
		if ($('#search').val()) {
			let search = $('#search').val();
			$.ajax({
				url: 'buscar.php',
				data: { search },
				type: 'POST',
				success: function (response) {
					let usuarios = JSON.parse(response);
					let template = '';
					usuarios.forEach(usuario => {
						template += `
					<tr usuarioId="${usuario.id}">
						<td>${usuario.id}</td>
						<td>
						${usuario.nombre} 
						</td>
						<td>${usuario.apellido}</td>
						<td>
						<a href="#" style="font-size:8px;"  class="usuario-item btn btn-success">Modificar </a>
						</td>
						
					</tr>
					`
					});
					$('#container1').html(template);
				}
			});
		}
	});


});

