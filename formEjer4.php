<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
<?php
		
		$d = $_GET['D'];		
		$h = $_GET['H'];
		$p = $_GET['P'];

		
		if($_GET['D']=="" or $_GET['H']=="" or $_GET['P']==""){
			echo "<div class='alert alert-danger' role='alert'>
			ingrese valores para calcular el volumen del prisma
			</div>";
		}else{
		
		$volumen = ($d*$h*$p);			
		echo "<div class='alert alert-success' role='alert'>
			el volumen del prisma es de ".$volumen." metros cubicos
			</div>";
		}

		
		
		?>	

		<a class="btn btn-success" href="ejercicio4.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>