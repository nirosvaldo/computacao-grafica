<?php
include_once('config.php');

$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);

if ($result) {
    echo "Conexão e consulta bem-sucedidas!";
} else {
    echo "Erro na consulta: " . $conexao->error;
}

$conexao->close();
?>
