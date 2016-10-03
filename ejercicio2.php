<?php include( 'header.php'); ?>
<div class="col-md-8 col-md-offset-1">
    <h2>Ejercicio 2</h2>
    <p>Diseñar un desarrollo web simple con php (formulario + archivo php) que pida al usuario el precio de tres productos en tres establecimientos distintos denominados “Tienda 1”, “Tienda 2” y “Tienda 3”. Cuando se introduce esta información se debe calcular y mostrar el precio medio del producto.</p>
    
            <form action="formEjer2.php" method="GET">
                <div class="form-group">
                    <input type="text" name="precio1" class="form-control" placeholder="Introduzca el precio del producto en el establecimiento número 1, en pesos">
                </div>
                <div class="form-group">
                    <input type="text" name="precio2" class="form-control" placeholder="Introduzca el precio del producto en el establecimiento número 2, en pesos">
                </div>
                <div class="form-group">
                    <input type="text" name="precio3" class="form-control" placeholder="Introduzca el precio del producto en el establecimiento número 3, en pesos">
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>

            </form>
        </div>
    </div>

</div>

<?php include( 'footer.php'); ?>