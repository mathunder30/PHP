<?php 


// Aqui salvamos os dados no banco de dados e utlizamos sessões para manter os dados do usuário e redirecioná-los para a página de exbição.

// iniciando a sessão
session_start();

// incluindo a conexão com o banco de dados
include 'conexao.php';

// Capturando os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$genero = $_POST['genero'];
$diagnostico = $_POST['diagnostico'];


// Preparando o SQL para inserir os dados digitados no formulario
$sql = 'INSERT INTO paciente (nome, idade, genero, diagnostico) VALUES ('$nome', '$idade', '$genero', '$diagnostico')';


// criei uma condição para ser executado a inserçãp
if($conn ->query($sql) === TRUE){

    // Salvando os dados na sessão
    $_SESSION['nome'] = $nome;
    $_SESSION['idade'] = $idade;
    $_SESSION['genero'] = $genero;
    $_SESSION['diagnostico'] = $diagnostico;

    // Redirecionando o usuário para a página "exibir_paciente.php"
    header("location: exibir_paciente.php");
    exit();
} else {
    echo "Erro". $sql. "<br>" . $conn->error;
}

// Fechando a conexão
$conn ->close();
?>