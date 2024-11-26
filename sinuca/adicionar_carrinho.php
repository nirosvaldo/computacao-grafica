<?php
session_start();
include 'config.php'; // Conexão com o banco de dados

$produto_id = intval($_POST['produto_id']); // Garantir que seja um número inteiro
$quantidade = intval($_POST['quantidade']); // Garantir que a quantidade seja numérica
$session_id = session_id(); // ID único da sessão do cliente

if ($quantidade <= 0) {
    // Caso a quantidade seja inválida
    header('Location: carrinho.php');
    exit();
}

// Verificar se o produto já está no carrinho
$sql = "SELECT * FROM carrinho WHERE produto_id = ? AND session_id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('is', $produto_id, $session_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Atualizar quantidade
    $sql = "UPDATE carrinho SET quantidade = quantidade + ? WHERE produto_id = ? AND session_id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('iis', $quantidade, $produto_id, $session_id);
} else {
    // Inserir novo item
    $sql = "INSERT INTO carrinho (produto_id, quantidade, session_id) VALUES (?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('iis', $produto_id, $quantidade, $session_id);
}

if ($stmt->execute()) {
    header('Location: carrinho.php');
    exit();
} else {
    echo "Erro ao adicionar item ao carrinho.";
    exit();
}
?>
