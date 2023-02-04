<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Funcion Mail</title>
</head>
<body>
	<div class="container">
		<div class="cabecera">
			<img src="images/image.jpg" alt="">
		</div>
		<div class="cuerpo">
			<p>Con este formulario vamos a enviar y recoger los datos del email enviado</p>
			<p>Habilita Mail Catcher y Mail Sender en Laragon para ver los resultados</p>

			<form action="datos.php" method="POST" enctype="multipart/form-data" class="formulario">
				<label for="direccion">
					Destinatario: <br>
					<input type="email" name="destino" class="form-control">
				</label>
				<br>
				<label for="asunto">
					Asunto: <br>
					<input type="text" name="asunto" class="form-control">
				</label>
				<br>
				<label for="asunto">
					Mensaje: <br>
					<textarea name="mensaje" id="" cols="30" rows="10" class="form-control"></textarea>
				</label>
				<br>
				<input type="submit" class="btn-success" value="enviar">
			</form>

		</div>
	</div>
</body>
</html>