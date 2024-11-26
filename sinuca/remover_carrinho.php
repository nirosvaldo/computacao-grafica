<?php
include 'config.php'; // Conexão com o banco de dados

$id = $_GET['id'];

$sql = "DELETE FROM carrinho WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();

header('Location: carrinho.php');
exit();
?>
