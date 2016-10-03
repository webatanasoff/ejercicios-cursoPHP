<?php include( 'header.php'); ?>
<div class="col-md-8 col-md-offset-1">

    <h2>Ejercicio 5</h2>
    <p>Crea una página web que cumpla con:</p>
    <ol>
        <li>Como título principal de la página debe figurar con etiquetas h1 el texto “Inscripción al Congreso de Medicina 2017”</li>
        <li>Debe contener dos formularios: el primero será “Inscripción al Congreso para médicos especialistas” y el segundo “Inscripción al congreso para médicos generalistas”. Estos títulos deben figurar antes del formulario con etiquetas h2.</li>
        <li>El formulario para médicos especialistas debe solicitar nombre, apellidos, especialidad y año de obtención de la especialidad. </li>
        <li>El formulario para médicos generalistas debe solicitar nombre, apellidos, centro médico donde ejerce y año de obtención del título.</li>
    </ol>
    
            <h1>Inscripción al Congreso de Medicina 2017</h1>
            <h2>Inscripción al Congreso para médicos Especialistas</h2>
            <form action="formEjer5.php" method="GET" >
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombreEsp" class="form-control" placeholder="ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellidoEsp" class="form-control" placeholder="ingrese su apellido">
                </div>
                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <input type="text" id="especialidad" name="especialidadEsp" class="form-control" placeholder="ingrese su especialidad">
                </div>
                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="text" id="anio" name="anioEsp" class="form-control" placeholder="ingrese el año de obtencion de la especialidad">
                </div>
                <button type="submit" class="btn btn-primary" name="enviarEsp">Enviar</button>

            </form>
            <br>
            <h2>Inscripción al Congreso para médicos Generalistas</h2>
            <form action="formEjer5.php" method="GET" >
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombreGen" class="form-control" placeholder="ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellidoGen" class="form-control" placeholder="ingrese su apellido">
                </div>
                <div class="form-group">
                    <label for="centroGen">Centro Medico</label>
                    <input type="text" id="centroGen" name="centroGen" class="form-control" placeholder="ingrese el centro medico donde ejerce la profesion">
                </div>
                <div class="form-group">
                    <label for="anio">Año</label>
                    <input type="text" id="anio" name="anioGen" class="form-control" placeholder="ingrese el año de obtencion del titulo">
                </div>
                <button type="submit" class="btn btn-primary" name="enviarGen">Enviar</button><br>

            </form>
        </div>
    </div>

</div>

<?php include( 'footer.php'); ?>