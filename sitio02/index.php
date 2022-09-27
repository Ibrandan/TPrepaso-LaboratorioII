<?php
    $ruta = '';
    require_once 'html/header.html';
    $alumno = 'Ignacio Brandan';
?>
    <form action="php/procesar.php" method="post">
        <section class="group">
            <label for="lblBase">Base: </label>
            <input type="number" id="lblBase" name="base">
        </section>
            <section class="group">
            <label for="lblAltura">Altura: </label>
            <input type="number" id="lblAltura" name="altura">
        </section>
        <section class="group btn-center">
            <input type="submit" value="Calcular Área">
            <input type="reset" value="Limpiar">
        </section>
    </form>

<?php
    require_once 'html/footer.html';
?>
