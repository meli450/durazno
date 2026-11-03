<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 
Además se debe mostrar desde la web que ha enviado la información. HTTP_REFERER -->
<body>
<form action="registro.php" method="POST">
    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="apellido">Apellido/s</label><br>
    <input type="text" name="apellido" id="apellido">
    <br>
    <label for="password">Contraseña</label><br>
    <input type="password" name="password" id="password">
    <br><br>
    
    <label for="tipo">¿Profesor/a o Alumno/a?</label>
    <select id="tipo" name="tipo">
        <option value="profesor">Profesor/a</option>
        <option value="alumno">Alumno/a</option>
    </select><br><br>

    <p>Actividades favoritas</p>
    <input type="checkbox" name="actividad" value="correr">
    <label for="correr">Correr</label><br>

    <input type="checkbox" name="actividad" value="futbol">
    <label for="futbol">Futbol</label><br>

    <input type="checkbox" name="actividad" value="gimnasia">
    <label for="gimnasia">Gimnasia></label><br>

    <input type="checkbox" name="acitividad" value="parkour">
    <label for="parkour">Parkour></label><br><br>

    <p>Género</p>
    <input type="radio" id="masc" name="genero" value="M">
    <label for="masculino">Masculino</label><br>
    <input type="radio" id="fem" name="genero" value="F">
    <label for="femenino">Femenino</label><br><br>

    <p>Edad</p>
    <label for="edad">Edad</label><br>
    <input type="number" id="edad" name="edad" min="18" max="99"><br><br>

    <label for="comentarios">Comentarios</label><br>
    <textarea id="comentarios" name="comentarios" rows="5" cols="40"></textarea>
    <br><br>

    <label for="color">Color favorito</label>
    <input type="color" id="color" name="color">
    <br><br>    
    <!-- campo vacio -->
    <input type="hidden" name="oculto" value="prueba">

    <input type="submit" value="Enviar">

</form>


</body>
</html>