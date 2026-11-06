<?php
session_start();
    if (!isset($_SESSION["posicion"])) {
        $_SESSION["posicion"]=0;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrera</title>
    <style>

    </style>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" name="correr" value="correr">
    </form>
    <form action="" method="POST">
        <input type="submit" name="reset" value="reset">
    </form>
    
    <?php
        $caballo= "&#9816";

        if(isset($_POST["reset"])){
            session_destroy();
        }
        
        if(isset($_POST["correr"])){
            $random= rand(1,4);
            $_SESSION["posicion"] += $random;
            if($_SESSION["posicion"]>=20){
                echo "Ganaste bb";
                session_destroy();
        }
        } 
        
        echo "<table border='1'>";
            echo "<tr>";
            for($i=0;$i<20;$i++){
                if($_SESSION["posicion"] == $i){
                    echo "<td>{$caballo}</td>";
                }else{
                    echo "<td>___</td>";
                }
            }
            echo "</tr>";
        echo "</table>";
?>
</body>
</html>