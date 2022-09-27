<?php
    // configure lo necesario
       
    $ruta = '../';
    $alumno = 'Ignacio Brandan';

    // complete con la invocación a los archivos necesarios
    
    require_once('../html/header.html');
    require_once('funciones.php');

    // Controle lo necesario e invoque a la función

    if( !empty($_POST['base']) && !empty($_POST['altura']))
    {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = fnAreaTerreno($base, $altura);

        echo '<p> El área del terreno es: '. $area . '</p>';
    }

    // Muestre el área calculada
    

    require_once('../html/footer.html');

?>