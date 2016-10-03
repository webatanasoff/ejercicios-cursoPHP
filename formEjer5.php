<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
<?php
		//---- FORMULARIO ESPECIALISTAS------

		if (isset($_GET['enviarEsp'])) {
		if (!empty($_GET['nombreEsp'])) {
			$nombreEsp=$_GET['nombreEsp'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese su nombre.
			</div>";
		}

		if (!empty($_GET['apellidoEsp'])) {
			$apellidoEsp=$_GET['apellidoEsp'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			ingrese su apellido.
			</div>";
		}

		if (!empty($_GET['especialidadEsp'])) {
			$nombreEsp=$_GET['especialidadEsp'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			ingrese su especialidad.
			</div>";
		}

		if (!empty($_GET['anioEsp'])) {
			$anioEsp=$_GET['anioEsp'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese el año de obtencion de la especialidad.
			</div>";
		}

		if (!empty($_GET['nombreEsp']) && !empty($_GET['apellidoEsp']) && !empty($_GET['especialidadEsp']) && !empty($_GET['anioEsp'])){
			echo "<div class='alert alert-success' role='alert'>
			Se ha completado con exito su inscripcion como medico especialista.
			</div>";
		}	
		}


		//--- FORMULARIO GENERALISTAS ----
		if (isset($_GET['enviarGen'])) {
		if (!empty($_GET['nombreGen'])) {
			$nombreGen=$_GET['nombreGen'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese su nombre.
			</div>";
		}

		if (!empty($_GET['apellidoGen'])) {
			$apellidoGen=$_GET['apellidoGen'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			ingrese su apellido.
			</div>";
		}

		if (!empty($_GET['centroGen'])) {
			$centroGen=$_GET['centroGen'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese el centro medico donde ejerce la profesion.
			</div>";
		}

		if (!empty($_GET['anioGen'])) {
			$anioGen=$_GET['anioGen'];
		}else{
			echo "<div class='alert alert-danger' role='alert'>
			Ingrese el año de obtencion del titulo.
			</div>";
		}
		
		if (!empty($_GET['nombreGen']) && !empty($_GET['apellidoGen']) && !empty($_GET['centroGen']) && !empty($_GET['anioGen'])){
			echo "<div class='alert alert-success' role='alert'>
			Se ha completado con exito su inscripcion como medico generalista.
			</div>";
		}

		}
		
		
		?>	

		<a class="btn btn-success" href="ejercicio5.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>