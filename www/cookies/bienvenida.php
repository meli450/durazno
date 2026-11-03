<?php  
    $nombre="usuario";
    $valor="Joe";
    $expira= time() +(10); 
    $mensaje= "";

    if(isset($_COOKIE[$nombre])){
    $mensaje= "<h1 class='mensajeVuelta'>Ya estás de vuelta</h1>";
    }else{
        setcookie($nombre, $valor, $expira);
        $mensaje= "<h1 class='nuevo'>Bienvenido</h1>";
        
    }


    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies1</title>

    <style>
        .mensajeVuelta{
            color: blue;
            font-weight:bold;
        }
        .nuevo{
            background-color: blue;
            color: white;
            display: inline-block;
        }
    </style>
</head>
    <!-- La idea es simular una web que si es la primera vez que la visitas muestre un mensaje 
    de "Bienvenida" en un cuadrado en azul, si ya la has visitado debe mostrar  otro mensaje 
    "ya estas de vuelta" de color Azul. La cookie deberá durar unos 10 segundos. -->
<body>
    <?php
    echo $mensaje;
    ?>
</body>
</html>