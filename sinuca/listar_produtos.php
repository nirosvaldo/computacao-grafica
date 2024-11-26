<?php
session_start();
include 'config.php'; // Arquivo com as configurações do banco de dados

// Verifica se o usuário é um administrador
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM produtos";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        /* Adicione seus estilos aqui */
    </style>
</head>
<body>

<h2>Lista de Produtos</h2>
<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Tipo</th>
            <th>Data de Criação</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td>R$ <?php echo number_format($row['preco'], 2, ',', '.'); ?></td>
            <td><?php echo ucfirst($row['tipo']); ?></td>
            <td><?php echo date('d/m/Y H:i', strtotime($row['data_criacao'])); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
