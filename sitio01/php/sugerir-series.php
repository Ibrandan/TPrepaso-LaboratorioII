<?php
    // configure lo necesario
       
    $ruta = '../';
    $alumno = 'Ignacio Brandan';

    // complete con la invocación a los archivos necesarios
    
    require_once('../html/header.html');
    require_once('series.php');

    // Seleccionar al azar y mostrar las imagenes

    echo '<h2> Series que te podrian gustar </h2>';
    echo '<section class="galeria">';
    for ($i=0; $i < 4; $i++) { 
        $indice = array_rand($series);
        echo '<img src="../img/' . $series[$indice] . '">';
        unset($series[$indice]);
    }
    echo '</section>';
?>

<?php

    require_once('../html/header.html');

?>