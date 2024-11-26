<?php
include_once('config.php');

// Testar a conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
echo "Conexão bem-sucedida!<br>";

// Testar a consulta
$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

if ($result) {
    echo "Consulta bem-sucedida!";
} else {
    echo "Erro na consulta: " . $conexao->error;
}

$conexao->close();
?>
