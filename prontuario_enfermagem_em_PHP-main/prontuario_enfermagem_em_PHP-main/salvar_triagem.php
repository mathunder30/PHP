<?php
include 'conexao.php'; // Conexão com o banco de dados

// Captura os dados do formulário
$dados_paciente_id = $_POST['dados_paciente_id'];
$temperatura = $_POST['temperatura'];
$pressao_arterial = $_POST['pressao_arterial'];
$frequencia_cardiaca = $_POST['frequencia_cardiaca'];
$obs_paciente = $_POST['obs_paciente'];

// Verifica se os campos estão preenchidos
if (!empty($dados_paciente_id) && !empty($temperatura) && !empty($pressao_arterial) && !empty($frequencia_cardiaca) && !empty($obs_paciente)) {

    // Prepara a query para inserir os dados no banco
    $stmt = $conn->prepare('INSERT INTO triagem (paciente_id, temperatura, pressao_arterial, frequencia_cardiaca, obs_paciente) VALUES (?, ?, ?, ?, ?)');
    $stmt->bind_param('issss', $dados_paciente_id, $temperatura, $pressao_arterial, $frequencia_cardiaca, $obs_paciente);

    // Executa a query e verifica se a inserção foi bem-sucedida
    if ($stmt->execute()) {
        echo 'Informações vitais adicionadas com sucesso!';
    } else {
        echo 'Erro ao adicionar informações vitais: ' . $stmt->error;
    }
} else {
    echo 'Todos os campos são obrigatórios.';
}
?>
