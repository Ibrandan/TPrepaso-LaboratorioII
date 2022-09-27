<?php
    $ruta = '';
    require_once 'html/header.html';
    $alumno = 'Ignacio Brandan';
?>
    <form action="php/calcular.php" method="post">
        <section class="group">
            <label for="lblApe">Apellido: </label>
            <input type="text" id="lblApe" name="apellido">
        </section>
        <section class="group">
            <label for="lblFecha">Fecha de Nacimiento: </label>
            <input type="date" id="lblFecha" name="fechanac">
        </section>
        <section class="group">
            <label for="lblAltura">Altura (en m): </label>
            <input type="number" step="0.01" id="lblAltura" name="altura">
        </section>
        <section>
            <section class="group">
            <label for="lblPeso">Peso (en Kg): </label>
            <input type="number" step="0.01" id="lblPeso" name="peso">
        </section>
        <section class="group btn-center">
            <input type="submit" value="Calcular IMC">
            <input type="reset" value="Limpiar">
        </section>
    </form>

<?php
    require_once 'html/footer.html';
?>
