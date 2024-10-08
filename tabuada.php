<?php
echo "escreva um numero para parecer a taboada"; // aqui esta sendo escrito afirmativa para poder 

$numero =  trim(fgets(STDIN)); // aqui declarei uma variavel chamada "$numero" recebendo o comadno para receber valores.

$multi = 0; // aqui estou declarando o multiplicador ser zero, pois na estrutura de repetição ele se inicia com 0

while ($multi <= 10){  //na estrutura de repetição, funcionará ate o 10, pois a tabuada será ate o 10

    $valor = $multi * $numero; // dentro dessa função declarei uma variavel "$valor" onde essa variavel recebera a conta do $numero * $multi

    echo $valor, "\n"; // echo serve para mostrar o valor no terminal

    $multi++; // aqui o multi esta indo de um em um.
};