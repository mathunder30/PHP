<?php

echo "Digite o primeiro numero: ";

$numero = trim(fgets(STDIN)); // STDIN captura a entrada do terminal


if ($numero % 2 === 0){
    echo "$numero é par";
} else if ($numero % 2 === 1){
    echo "$numero é impar";

} else{
    echo"numero não indentificado";
    
};