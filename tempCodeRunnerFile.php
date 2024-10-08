<?php
echo "escreva um numero para parecer a taboada";
$numero =  trim(fgets(STDIN));
$multi = 0;

while ($multi <= 10){
    $valor = $multi * $numero;
    echo $valor, "\n";
    $multi++;
};