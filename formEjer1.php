<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
<?php
		
		$d = $_GET['D'];
		
		$h = $_GET['H'];
		
		if($_GET['D']=="" or $_GET['H']==""){
			echo "<div class='alert alert-danger' role='alert'>
			ingrese valores para calcular el volumen
			</div>";
		}else{
			$r = $d/2;
		$pi = 3.14159;			
		$v = $pi*($r*$r)*$h;
		$v = round($v, 2);			
		echo "<div class='alert alert-success' role='alert'>
			el volumen del cilindro es de ".$v." metros cubicos
			</div>";
		}

		
		
		?>	

		<a class="btn btn-success" href="ejercicio1.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>
