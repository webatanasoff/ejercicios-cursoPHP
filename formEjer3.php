<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
<?php
		
		$q = $_REQUEST['Q'];
		$d = $_REQUEST['D'];
		$h = $_REQUEST['H'];
		
		if($_GET['Q']=="" or $_GET['D']=="" or $_GET['H']==""){
			echo "<div class='alert alert-danger' role='alert'>
			ingrese valores para calcular el tiempo que transcurrirá hasta el llenado del depósito
			</div>";
		}else{
		$r = $d/2;
		$pi = 3.14159;			
		$vol_litros = $pi*($r*$r)*$h;
		$tiempo_min = round (($vol_litros/$q),2);		
		echo "<div class='alert alert-success' role='alert'>
			el tiempo que transcurrirá hasta el llenado del depósito
			 es de ".$tiempo_min." minutos
			</div>";
		}

		
		
		?>	

		<a class="btn btn-success" href="ejercicio3.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>