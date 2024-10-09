<?php

//Este arquivo faz a conexão com o banco de dados.

$servename = "localhost"; // Esse aqui é onde buscamos o endereço do servidor
$username = "root"; // Esse aqui serve para o usuário do banco de dados
$password = ''; // Senha do banco de dados (caso não houver senha, pode deixar vazio)
$dbname = ''; // Nome do banco de dados

// Criando a conexão com o banco de dados
$conn = new mysqli($servename, $username, $password, $dbname);

// usei uma condição para verificar se há erros no banco de dados
if ($conn ->connect_error){
    die("Falha na conexão: ". $conn->connect_error);
}

?>

