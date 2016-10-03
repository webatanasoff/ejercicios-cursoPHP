<?php include( 'header.php'); ?>
        
        <div class="col-md-8 col-md-offset-1">
    
    <h2>Ejercicio 5b</h2>
    <p>Crea una página web que contenga un formulario de registro de usuarios que cumpla estas condiciones:</p>
    <ul>
        <li>Como título principal de la página debe figurar con etiquetas h1 el texto “Solicitud de alta como usuario”. </li>
        <li>Debe contener un campo entrada de línea para solicitar el nombre.</li>
        <li>Debe contener un campo entrada de línea para solicitar los apellidos. </li>
        <li>Debe contener un campo entrada de línea para solicitar el correo electrónico. Hay que validar en el codigo php que el campo direccion contenga un “@” en los datos ingersados.</li>
        <li>Debe contener un campo entrada de línea y tipo password para solicitar la contraseña</li>
        <li>Debe contener un campo multilínea para solicitar observaciones.</li>
        <li>El formulario se debe enviar por el método get </li>
    </ul>
    <br>
    <h1>Solicitud de alta como usuario</h1>
    
            <form action="formEjer5b.php" method="GET">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Introduzca el nombre">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control" placeholder="Introduzca el apellido">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Introduzca un email de contacto">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Introduzca su contraseña">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="observaciones" placeholder="introduzca aqui las observaciones"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>

            </form>
        </div>
    </div>
</div>


<?php include( 'footer.php'); ?>