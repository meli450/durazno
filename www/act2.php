<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $eu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
    "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

 /**Crea un script con PHP que muestre un listado de los nombres de las capitales y sus correspondientes paises. El listado debe ser parecido a:
La capital de Netherlands és Amsterdam
La capital de Greece és Athens
La capital de Germany és Berlin */
    foreach($eu as $pais=>$capital){
        echo "La capital de {$pais} es {$capital} <br>";
    }
?>
</body>
</html>