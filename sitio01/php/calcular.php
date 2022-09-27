<?php
    // configure lo necesario
    
    $ruta = '../';
    $alumno = 'Ignacio Brandan';
    // complete con la invocación a los archivos necesarios

    require_once ('../html/header.html');
    require('mis-funciones.php');
    
    // Controle lo necesario e invoque a la función

    if( !empty($_POST['apellido']) && !empty($_POST['fechanac']) && 
        !empty($_POST['altura']) && !empty($_POST['peso']))
    {
        $apellido = $_POST['apellido'];
        $fechaNac = $_POST['fechanac'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $masaCorporal = fnIMC($altura, $peso);

        $carpeta = '../txt/';
        if(!file_exists($carpeta)){
            mkdir($carpeta);
        }
        $nombreArchivo = 'indices.txt';
        $archivo = fopen($carpeta.$nombreArchivo , 'a');
        $linea = ucwords($apellido) . ';' . $fechaNac . ';' . $altura . ';' . $masaCorporal;
        fputs( $archivo , $linea . PHP_EOL);
        fclose($archivo);
        
        // Muestre el IMC caculado
        
        echo '<h2> La masa corporal es: ' . $masaCorporal . '</h2>';

        // redireccionar a index.php luego de 3 seg
    
        header('refresh: 3; url=../index.php');
}

    require_once('../html/footer.html');
?>