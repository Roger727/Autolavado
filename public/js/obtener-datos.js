// Seleccionar elemento
var opcionesServicio = $('#IdServicio');

if(opcionesServicio[0]) {
	var elprecio = $('#elPrecio');
	var laDescripcion = $('#laDescripcion');
	// Manejo de evento change
	opcionesServicio.change(function() {
		var datos = this.value;

		$.ajax({
			url: '/auto/obtener-datos',
			data: {
				datos: datos
			},
			dataType: 'json',
			method: 'POST',
			success: function(respuesta) {
				elPrecio.val(respuesta.precio);
				laDescripcion.val(respuesta.descripcion);
			},
			error: function() {

			}
		});
	});
}