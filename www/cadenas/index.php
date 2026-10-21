<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frutas = array("naranja", "pera", "manzana");

    $frutas1 = ["naranja", "pera", "manzana"];

    $frutas3 = [];
    $frutas3[0]= "naranja";
    $frutas3[1]= "pera";
    $frutas3[]= "maanzana";

    foreach($frutas as $f){
        echo "$f <br/ >";
    }

    foreach ($frutas as $clave=>$valor){
        echo "clave: $clave valor: $valor <br/ >";
    }

    $array = ["marca"=>"Toyota","modelo"=>"Celica","color"=>"black","fabrica"=>"1991"];

    echo "el coche es un". $array["marca"]."<br>"; 
    echo "el coche es un {$array["marca"]} <br>";

    $array['marca']="FERRARI";
    $array[]="SPIDER";  //añade con índice [0]
    $array['color']="VERDE";
    $array[]="2013";
    $array['electrico'] = "urbano";  //añade con nueva clave 'electrico' y valor 'urbano'


    print_r($array);
    ?>


</body>
</html>