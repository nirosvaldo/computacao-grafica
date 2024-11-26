<?php
session_start();
include_once('config.php');

// Verifica se o admin está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nome = htmlspecialchars($_POST['nome']); // Protege contra XSS
    $descricao = htmlspecialchars($_POST['descricao']);
    $preco = floatval($_POST['preco']); // Assegura que o preço seja um número
    $imagem = htmlspecialchars($_POST['imagem']); // Imagem como URL

    // Evitar SQL Injection utilizando prepared statements
    $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('ssds', $nome, $descricao, $preco, $imagem);

    if ($stmt->execute()) {
        header("Location: produtos.php"); // Redireciona para a página de produtos
        exit;
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>
<body>
    <h2>Adicionar Novo Produto</h2>

    <form method="POST">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <label for="imagem">Imagem (URL):</label><br>
        <input type="text" id="imagem" name="imagem"><br><br>

        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>
