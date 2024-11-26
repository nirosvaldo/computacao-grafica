<?php
// Inclua seu arquivo de configuração para estabelecer a conexão
include_once('config.php');

// Verifique se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Consulta para pegar o nome do usuário logado
$query = "SELECT USER()";
$result = $conexao->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    echo "Usuário atual do MySQL: " . $row['USER()'];
} else {
    echo "Erro ao obter o usuário: " . $conexao->error;
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
