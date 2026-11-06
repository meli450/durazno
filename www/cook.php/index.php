<?php
setcookie("valor", 1, time() + 30);    
//time() tiempo desde que se originó unix+ 30 segundos

print_r($_COOKIE);    //no muestra todas las cookies por temas de seguridad

echo "<br>";

?>