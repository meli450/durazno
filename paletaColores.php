/*
La idea es que se visualicen las diferentes tonalidad de los distintos colores, es decir, 
todas las combinaciones de colores posibles con un incremento de 50 en cada tonalidad de la paleta , para ello, 
deberemos ir dando valores a RGB de 0 hasta 255 (incremento 50).
Para visualizar el valor en hexadecimal se usará la función dechex
*/

<?php
echo "<table>";

for ($r =0; $r <=255; $r += 50){
    for ($g =0; $g <=255; $g += 50){
      echo "<tr>"; 
      
      for($b =0; $b <=255; $b += 50){
      $hexadecimal= "#". dechex($r). dechex($g). dechex($b);
        
      echo "<td style='background-color: rgb($r,$g,$b)'> $hexadecimal </td>";
        // echo "<td style=\"background-color: rgb($r,$g,$b)\"> $hex </td>";
      }
      echo "</tr>";
    }
}
echo "</table>";

?>
