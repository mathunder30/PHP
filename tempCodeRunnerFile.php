<?php
echo " escreva um numero: ";
$numero = trim(fgets(STDIN));
$fatorial = 1;

for ($x = 1; $x <= $numero; $x++){
    $fatorial = $fatorial * $x;

};

echo " O fatorial do numero", $numero, "é ", $fatorial;