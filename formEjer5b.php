<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
	<?php

	if (isset($_GET['enviar'])) {
		if (!empty($_GET['nombre'])) {
			$nombre= $_GET['nombre']."<br>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese su nombre.
			</div>";
		}

		if (!empty($_GET['apellido'])) {
			$apellido =  $_GET['apellido']."<br>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese su apellido.
			</div>";
		}

		if (!empty($_GET['email']) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
			$email = $_GET['email']."<br>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese un email valido.
			</div>";
		}

		if (!empty($_GET['password'])) {
			$password = $_GET['password']."<br>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese su contraseña.
			</div>";
		}

		if (!empty($_GET['observaciones'])) {
			$observaciones = $_GET['observaciones']."<br>";
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese al menos una observacion .
			</div>";
		}

		if (!empty($_GET['nombre']) && !empty($_GET['apellido']) && !empty($_GET['email']) && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) && !empty($_GET['password']) && !empty($_GET['observaciones']) ){
			echo 
			"<div class='alert alert-success' role='alert'>
			<h4>Se ha dado de alta como usuario con los siguientes datos: </h4>
			<ul>
				<li>Nombre: $nombre</li>
				<li>Apellido: $apellido</li>
				<li>Email: $email</li>
				<li>Password: $password</li>
				<li>Observaciones: $observaciones</li>
			</ul>
			</div>";
		}
	}
		
	?>	

	<a class="btn btn-success" href="ejercicio5b.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>

		<!--
		$error = "";
		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];

		if (!empty($nombre)) {
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
			echo $nombre;
		}else {
			$error .=" por favor ingresa un nombre"; 
		} -->