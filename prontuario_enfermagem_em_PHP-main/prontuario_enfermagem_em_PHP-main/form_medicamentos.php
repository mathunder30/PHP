<?php

include 'conexao.php'; // estou incluindo a conexão do msql para o php

$dados_paciente_id = $_GET ['dados_paciente_id']; // está recendo o ID (dados paciente) por via GET.

if(!$dados_paciente_id){
    echo 'ID do paciente não foi informado.';
    exit (); // o exit interrope a execução se o id não for passado.
}

?>