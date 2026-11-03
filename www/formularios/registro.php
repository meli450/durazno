<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST["enviar"])){
        echo "se han guardado los datos"
        $nombre= $_POST["nombre"];
        $apellido= $_POST["apellido"];
        $password= $_POST["password"];
        $tipo= $_POST["tipo"];
        $actividad= $_POST["actividad"];
        $genero= $_POST["genero"];
        $edad= $_POST["edad"];
        $color= $_POST["color"];
        $oculto= $_POST["oculto"];

    }

    ?>
</body>
</html>