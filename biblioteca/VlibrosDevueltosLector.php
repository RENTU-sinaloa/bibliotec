<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">
		

			function imprSelec(nombre) {
			  var ficha = document.getElementById(nombre);//obtenemos el objeto a imprimir
			  var ventimp = window.open(' ', 'popimpr'); //abrimos una ventana vacía nueva
			  ventimp.document.write( ficha.innerHTML ); //imprimimos el HTML del objeto en la nueva ventana
			  ventimp.document.close(); //cerramos el documento
			  ventimp.print( ); //imprimimos la ventana
			  ventimp.close(); //cerramos la ventana

			}
	</script>
	

	
	<title></title>

	<link rel="stylesheet" type="text/css" href="css_l/hoja_librosDevueltosLector.css">
</head>
<body>

<script type="text/javascript">
		$(function ListarDefault(){
			var parametros = {};

			$.ajax({
			data: parametros,
			url: 'listarlibrosdevueltoslector.php',
			type: 'POST',
			beforeSend: function(){
			$("#ListaLDL").html("Procesando")
			},
			success: function(datos){
			$("#ListaLDL").html(datos);
			}
			});



		})



</script>


	<div id="ContenidoLDL">
		
		<div id="DatosLDL">
			


			<div id="tablaLDL">
				
				<h1>Mis Libros Devueltos</h1>
				<div id="busqueda">




					<div id="ImprimirLDL">
					<button onclick="imprSelec('ListaLDL');">Imprimir</button>
					</div>	

					<!--<div id="BusquedaLR">
					<input type="text" id="txtbusqueda" name="" placeholder="Nro Carnet Lector">
					<button type="button" onclick="ListarLibrosDevueltos();">Buscar</button>
					</div>-->


					
				</div>

				<div id="ListaLDL">
					
				</div>

			</div>


		</div>

	</div>




</body>
</html>