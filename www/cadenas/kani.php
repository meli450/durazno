<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $frase1 = "escribe un codigo que transforme esta frase";
    $longitud = strlen($frase1);

    // frase1 en min y devuelva forma kani
    for($i= 0; $i < $longitud; $i++){
        if($i%2==0){
            echo strtoupper($frase1[$i]);
        } else{
            echo $frase1[$i];
        }
        
    }
    echo "</br>";

    // Devuelve una nueva frase1 con solo carácteres de las posiciones impares en letra mayúscula
    for($i= 0; $i < $longitud; $i++){
        if($i%2==1){
            echo strtoupper($frase1[$i]);
        } else{
        }
    }
    echo "</br>";

    // A partir de una frase con palabras solo separadas por espacio, devolver:
    // Letras totales y cantidad de palabras
    // Una linea por cada palabra indicando su tamaño
    $frase2 = "Quien fue será y quien fuere fuera";
    $letrasT = strlen($frase2);                            // cuenta letters
    $cantPal= str_word_count($frase2);                      //cuenta words
    echo "La frase: $frase2 tiene $letrasT letras y $cantPal palabras <br>"; 
    $palabras= explode(" ", $frase2);
    
    for($i=0; $i < count($palabras); $i++){                //cuenta el tamaño (i) del array
        echo $palabras[$i]. "<br>";
    }


    // A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas. 
    // Hacedlo de forma tradicional y usando substr_count.
    $frase3 = "la cadena le brilla en lo oscuro";



    echo "<br>";
    // Dada la siguiente cadena se trata de dibujar el siguiente retrato robot
    $robot= "1 5W;1 1|2 1x1 1x2 1|;1@4 1U4 1@;1 1|2 3=2 1|;2 1\\5_1/";
    // Genera espacios vacios en html "&nbsp;".
    // Funciones interesantes explode, strln
    $linea= explode(";", $robot);
    for($i =0; $i < count($linea); $i++){
        // print_r($linea[$i]);
        $duo= str_split($linea[$i], 2);
        for($j=0; $j <count($duo); $j++){
            $cant = $duo[$j][0];
            $caracter = $duo[$j][1];
            for($k=0; $k<$cant; $k++){
                if($caracter == " "){
                    echo "&nbsp";
                    } else{
                        echo $caracter;
                        }
                        }
                        }
                        echo "<br>";

        }

    echo "<br>";

    // Dado un numero cualesquiera, por ejemplo, 1123456789, 
    // se trata de separar en millares, usando funciones de cadenas

    $num = 1123456789;
    $numLongitud= strlen($num);
    $aux= 0;

    for($i=1; $i< ($numLongitud >= 0); $i--){
        if(($i %3 == 0)){
            $aux[$i] = $num[$i]. ".";

        } else{
            $aux = $num[$i];
        }
    }
    for(j$


    // Queremos saber si una contraseña es segura. Para que sea segura debe cumplir las siguientes reglas:
        // Contener al menos 1 vocal
        // No debe tener 3 vocales consecutivas o 3 consonantes cconsecutivas
        // No debe tener 2 ocurrencias consecutivas de la misma letra, excepto por 'ee' o 'oo'
        // Longitud minima es de 6 caracteres y la maxima de 10
        // Los espacios en blanco no están permitidos
    







    ?>
</body>
</html>