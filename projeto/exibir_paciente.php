<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Paciente</title>
</head>
<body>
    <h2>Dados do Paciente Cadastrados</h2>

    <?php

    if(isset($_SESSION['nome']) && isset($_SESSION['idade']) && isset($_SESSION['genero']) && isset($_SESSION['diagnostico'])){

        echo "<p><strong>Nome: </strong> " . $_SESSION['nome'] . "</p>";
        echo "<p><strong>Idade: </strong>" . $_SESSION['idade'] . "</p>";
        echo "<p><strong>Gênero:</strong> " . $_SESSION['genero'] . "</p>";
        echo "<p><strong>Diagnóstico:</strong> " . $_SESSION['diagnostico'] . "</p>";


    } else{
        echo "<p>Não há dados para exibir.</p>"
    }
    
     // Limpa os dados da sessão após exibi-los (opcional)
     session_unset();  // Remove todas as variáveis de sessão
     session_destroy();  // Destroi a sessão
     ?>
 
     <a href="index.php">Voltar ao Cadastro</a>
     <!-- Link para voltar ao formulário de cadastro -->
</body>
</html>