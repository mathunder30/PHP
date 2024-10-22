<?php

include 'conexao.php'; // estou incluindo a conexão do msql para o php

$dados_paciente_id = $_GET ['dados_paciente_id']; // está recendo o ID (dados paciente) por via GET.

if(!$dados_paciente_id){
    echo 'ID do paciente não foi informado.';
    exit (); // o exit interrope a execução se o id não for passado.
}

$stmt = $conn ->prepare('SELECT * FROM dados_paciente WHERE id = i');
$stmt ->bind_param('i', $dados_paciente_id);
$stmt -> execute();
$result = $stmt ->get_result(); // obtem o resultado da triagem
$dados_paciente = $result -> fetch_assoc(); //pega o resultados do paciente

?>

<!-- HTML para o formulário de entrada de dados -->
<h1>Adicionar Informações vitais do paciente: <?php echo $dados_paciente['nome']; ?></h1>

<form action="salvar_triagem.php" method="POST">  <!-- Envia os dados do formulário para o script "salvar_medicamento.php" usando o método POST. -->
    <input type="hidden" name="dados_paciente_id" value="<?php echo $dados_paciente_id; ?>">  <!-- Campo oculto que armazena o ID do paciente para envio. -->
    
    <label for="temperatura">Temperatura:</label>  <!-- Campo de entrada para o nome do medicamento. -->
    <input type="text" id="temperatura" name="temperatura" required><br>

    <label for="pressao_arterial">Presão Arterial:</label>  <!-- Campo de entrada para a dosagem do medicamento. -->
    <input type="text" id="pressao_arterial" name="pressao_arterial" required><br>

    <label for="frequencia_cardiaca">Frequencia Cardiaca:</label>  <!-- Campo de entrada para a frequência de administração. -->
    <input type="text" id="frequencia_cardiaca" name="frequencia_cardiaca" required><br>

    <label for="obs_paciente">Observação do Paciente:</label>  <!-- Campo de entrada para a frequência de administração. -->
    <input type="text" id="obs_paciente" name="obs_paciente" required><br>

    <input type="submit" value="Salvar Informações vitais">  <!-- Botão para enviar o formulário. -->
    
</form>