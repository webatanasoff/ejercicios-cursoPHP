<?php include( 'header.php'); ?>
<div class="col-md-8 col-md-offset-1">

    <h2>Ejercicio 3</h2>
    <p>Diseñar un desarrollo web simple con PHP que dé respuesta a la necesidad que se plantea a continuación.</p>
    <p>Un operario de una fábrica recibe cada cierto tiempo un depósito cilíndrico de dimensiones variables, que debe llenar de aceite a través de una toma con cierto caudal disponible.</p>
    <p>Se desea crear una aplicación web que le indique cuánto tiempo transcurrirá hasta el llenado del depósito. El caudal disponible se considera constante para los tiempos que tardan los llenados de depósitos y lo define el propio operario, aportando el dato en litros por minuto.</p>
    
            <form action="formEjer3.php" method="GET">
                <div class="form-group">
                    <input type="text" name="Q" class="form-control" placeholder="Introduzca el caudal disponible en litros / minuto">
                </div>
                <div class="form-group">
                    <input type="text" name="D" class="form-control" placeholder="Introduzca el diámetro del depósito, en metros">
                </div>
                <div class="form-group">
                    <input type="text" name="H" class="form-control" placeholder="Introduzca la altura del depósito, en metros">
                </div>
                <button type="submit" class="btn btn-primary">Calcular</button>

            </form>
        </div>
    </div>

</div>

<?php include( 'footer.php'); ?>