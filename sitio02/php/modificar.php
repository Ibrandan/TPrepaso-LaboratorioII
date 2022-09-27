<?php
    // configure lo necesario
       
   $ruta = '../';
   $alumno = 'Ignacio Brandan';

    // complete con la invocación a los archivos necesarios

    require_once('../html/header.html');

    // abra los archivos

    /*

    6) En el archivo modificar.php: 
        a. Abrir para leer un archivo de nombre sin-iva.txt y abrir otro para 
        escribir, de nombre con-iva.txt. Los archivos deberán estar en la 
        carpeta txt, que puede no existir. Hacer los controles necesarios.
        b. Para cada línea que lea de sin-iva.txt, deberá recuperar el precio, y 
        hacer el cálculo precio*21/100 + precio.
        c. Luego de cada cálculo, guardar en el archivo con-iva.txt, de modo 
        que por cada producto se agregue, el nuevo precio calculado. En el 
        archivo se debe guardar los campos así:
        nombre;precioSinIVA;precioConIVA

    */

    $carpeta = '../txt/';
    if(!file_exists($carpeta)){
        mkdir($carpeta);
    }
    $archivoSinIva = fopen ($carpeta.'sin-iva.txt', 'r');
    $archivoConIva = fopen ($carpeta.'con-iva.txt', 'a');


    while(!feof($archivoSinIva)){
        $lineaSinIva = fgets($archivoSinIva);
        if($lineaSinIva != ' '){
            $separadorSinIva = explode(';', $lineaSinIva);
            $producto = $separadorSinIva[0];
            $precioSinIva = floatval($separadorSinIva[1]);
            $precioConIva = $precioSinIva + $precioSinIva * 21/100; 
            $lineaConIva = $producto . ';' . $precioSinIva . ';' . $precioConIva;
            fputs($archivoConIva, $lineaConIva . PHP_EOL);
        }
    }
    fclose($archivoSinIva);
    fclose($archivoConIva);

    echo '<p> Las modificaciones han sido realizadas con exito </p>';


    // realice el cálculo pedido por cada línea del archivo
    
    // guarde los datos en el otro archivo por cada línea analizada

    require_once('../html/footer.html');
 
?>