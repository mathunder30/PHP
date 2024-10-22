<?php
include 'conexao.php';  // Inclui o arquivo de conexão com o banco de dados.

$paciente_id = $_GET['dados_paciente_id'];  // Recebe o ID do paciente via GET (parâmetro da URL).

// Verifica se o ID do paciente foi informado.
if (!$paciente_id) {
    echo "ID do paciente não foi informado.";
    exit;  // Interrompe a execução se o ID não foi passado.
}

// Busca os medicamentos do paciente.
$stmt = $conn->prepare("SELECT * FROM triagem WHERE dados_paciente_id = ?");  // Prepara a query para buscar os medicamentos pelo ID do paciente.
$stmt->bind_param('i', $paciente_id);  // Substitui o "?" pelo valor da variável $paciente_id (do tipo inteiro 'i').
$stmt->execute();  // Executa a consulta.
$result = $stmt->get_result();  // Obtém o resultado da consulta.
?>

<h1>Medicamentos para o Paciente: <?php echo $paciente_id; ?></h1>

<!-- Tabela para exibir os medicamentos do paciente -->
<table border="1">
    <tr>
        <th>Temperatura</th>
        <th>Pressão Arterial</th>
        <th>Frequência Cardíaca</th>
        <th>Observações sobre o Estado do Paciente</th>
    </tr>

    <!-- Loop para listar cada medicamento encontrado no banco de dados -->
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['temperatura']; ?></td>  <!-- Exibe a temperatura. -->
            <td><?php echo $row['pressao_arterial']; ?></td>  <!-- Exibe a pressão arterial. -->
            <td><?php echo $row['frequencia_cardiaca']; ?></td>  <!-- Exibe a frequência cardíaca. -->
            <td><?php echo $row['obs_paciente']; ?></td>  <!-- Exibe as observações do paciente. -->
        </tr>
    <?php } ?>
</table>
