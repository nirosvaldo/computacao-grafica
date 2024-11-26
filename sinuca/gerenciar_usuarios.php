<?php
session_start();

// Verificando se o administrador está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php"); // Redireciona para o login caso não esteja logado
    exit;
}

// Conexão com o banco de dados
include_once('config.php');

// Verificando se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Buscar todos os usuários
$sql = "SELECT * FROM usuarios"; // Ajuste conforme o nome da tabela no seu banco de dados
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        /* Barra lateral */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 12px;
            margin: 8px 0;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        /* Conteúdo Principal */
        .content {
            margin-left: 260px;
            padding: 20px;
            text-align: center;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        td a {
            text-decoration: none;
            color: #007bff;
        }
        td a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Barra Lateral -->
    <div class="sidebar">
        <h2 style="text-align: center; color: #fff;">Administração</h2>
        <a href="admin.php">Dashboard</a>
        <a href="usuarios.php">Gerenciar Usuários</a>
        <a href="produtos.php">Gerenciar Produtos</a>
        <a href="pedidos.php">Gerenciar Pedidos</a>
        <a href="logout.php">Sair</a>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        <header>
            <h1>Gerenciar Usuários</h1>
        </header>

        <h2>Lista de Usuários Cadastrados</h2>

        <!-- Exibindo a tabela de usuários -->
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Data de Cadastro</th><th>Ações</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telefone'] . "</td>";
                echo "<td>" . $row['data_cadastro'] . "</td>";
                echo "<td><a href='editar_usuario.php?id=" . $row['id'] . "'>Editar</a> | <a href='deletar_usuario.php?id=" . $row['id'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 - Sistema de Administração</p>
    </footer>

</body>
</html>
