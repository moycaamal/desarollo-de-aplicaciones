<!DOCTYPE html>
<html>

<head>
	<title>Apartado || Cañones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/log.css">

</head>

<body class="text-center">
	<form class="form-signin">
		<img class="mb-4" src="img/log.png" alt="">
		<h1 class="h3 mb-3 font-weight-normal" style='color:white;'>Inicio de Sesión</h1>
		<label for="inputUsuario" class="sr-only">Usuario</label>
		<input type="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
		<label for="inputPassword" class="sr-only">Contraseña</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
		<div class="checkbox mb-3">
			
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="button" id="buttonSign">Iniciar</button>
		<div class="mensaje">
			<span class="alert alert-danger" id="error" style='display:none;'></span>
			<span class="alert alert-success" id="success" style='display:none;'></span>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		
	</form>
</body>

</html>