<?php
    $nombre="visitas";
    $time= time() +(86400*365);

    if(isset($_COOKIE[$nombre])){
        $visitas = (int) $_COOKIE[$nombre] + 1;
    }else{
        
        $visitas=1;
    }
    setcookie($nombre, $valor,$time);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies2</title>
</head>
<body>
    <!-- Se desea que cuente el número de visitas que realiza un usuario al visitar la página; 
     este contador conserva su valor durante un año aún a pesar de que un usuario cierre el navegador 
     y tarde días en volver a visitar la página. -->
</body>
</html>