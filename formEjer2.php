<?php include('header.php'); ?>
<div class="col-md-8 col-md-offset-1">
<?php
		
		$precio1 = $_GET['precio1'];
		$precio2 = $_GET['precio2'];
		$precio3 = $_GET['precio3'];

		if($_GET['precio1']=="" or $_GET['precio2']=="" or $_GET['precio3']==""){
			echo "<div class='alert alert-danger' role='alert'>
			ingrese valores para calcular el precio medio del producto
			</div>";
		}else{
		$media = ($precio1+$precio2+$precio3);			
		echo "<div class='alert alert-success' role='alert'>
			El precio medio del producto es ".$media." pesos
			</div>";
		}

		
		
		?>	

		<a class="btn btn-success" href="ejercicio2.php" role="button">Volver al Formulario</a>
		</div>
<?php include('footer.php'); ?>