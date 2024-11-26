<?php
session_start();
include 'config.php'; // Arquivo com as configurações do banco de dados

// Verifica se o usuário está logado
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php"); // Redireciona para o login se não estiver logado
    exit;
}

$user_id = $_SESSION['user_id'];
$session_id = session_id();

// Transfere os itens do carrinho para a tabela de pedidos
$sql = "INSERT INTO pedidos (user_id, mesa_id, quantidade, preco, data_pedido)
        SELECT ?, mesa_id, quantidade, preco, NOW() FROM carrinho WHERE session_id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param('is', $user_id, $session_id);
$stmt->execute();

// Apaga os itens do carrinho
$sql_delete = "DELETE FROM carrinho WHERE session_id = ?";
$stmt_delete = $conexao->prepare($sql_delete);
$stmt_delete->bind_param('s', $session_id);
$stmt_delete->execute();

echo "<h1>Compra finalizada com sucesso!</h1>";
echo "<a href='index.php'>Voltar aos Produtos</a>";
?>
