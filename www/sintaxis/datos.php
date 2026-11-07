<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <?php
    echo "<h1>=EJERCICIO MOSTRAR DATOS TABLA=</h1>";
    echo "<h4>Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono. Luego muéstralos por pantalla dentro de una tabla.</h4>";
    $nombre="mel";
    $apellido1="isa";
    $apellido2="asi";
    $email= "melisa@gmail.com";
    $nacimiento=2003;
    $tel="621212112";
    $perfil= array(
                    "Nombre" => $nombre,
                    "1º Apellido" => $apellido1,
                    "2º Apellido" => $apellido2,
                    "Email" => $email,
                    "Fecha de nacimiento:" => $nacimiento,
                    "Teléfono" => $tel
                    );
    echo "<table border='1'>";
    foreach ($perfil as $clave => $valor){
        echo "<tr>";
        echo "<td>". $clave. "</td>";
        echo "<td>". $valor. "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    ?>
</body>
</html>