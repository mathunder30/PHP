<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro de Paciente </title>
</head>
<body>
    <h2> Cadastro de Paciente</h2>

    <form action = "salvar_paciente.php" method = 'post'>
        <label for ='nome'>Nome: </label>
        <input type = 'text' name = "nome" id="nome" required><br><br>

        <label for ='idade'>Idade:</label>
        <input type = 'number' name="idade" id="idade" required><br><br>

        <label for='genero'>Gênero: </label>
        <select name="genero" id="genero" required>
            <option value = "Masculino">Masculino</option>
            <option value = "Feminino">Feminino</option>
            <option value = "Outro">Outro</option>
        </select><br><br>

        <label for = "Diagnostico">Diagnóstico: </label>
        <textarea name="diagnostico" id="diagnostico" required></textarea><br><br>

        <input type ='submit' value="Salvar">
    </form>

    
</body>
</html>