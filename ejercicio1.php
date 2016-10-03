<?php include( 'header.php'); ?>
        
        <div class="col-md-8 col-md-offset-1">
    
    <h2>Ejercicio 1</h2>
    <p>Diseñar un formulario web que pida la altura y el diámetro de un cilindro en metros. Una vez el usuario introduzca los datos y pulse el botón calcular, deberá calcularse el volumen del cilindro y mostrarse el resultado en el navegador.</p>
    
            <form action="formEjer1.php" method="GET">
                <div class="form-group">
                    <input type="text" name="D" class="form-control" placeholder="Introduzca el diámetro en metros">
                </div>
                <div class="form-group">
                    <input type="text" name="H" class="form-control" placeholder="Introduzca la altura en metros">
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>

            </form>
        </div>
    </div>
</div>


<?php include( 'footer.php'); ?>