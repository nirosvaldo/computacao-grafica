<?php
session_start();

// Verificando se o administrador está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
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
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 40px;
        }
        .admin-button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 200px;
            text-align: center;
            transition: background-color 0.3s;
        }
        .admin-button:hover {
            background-color: #45a049;
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
        <a href="logout.php">Sair</a>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        <header>
            <h1>Painel de Administração</h1>
        </header>

        <h2>Escolha a opção que deseja administrar</h2>

        <!-- Botões de Navegação -->
        <div class="button-container">
            <a href="usuarios.php">
                <button class="admin-button">Gerenciar Usuários</button>
            </a>
            <a href="produtos.php">
                <button class="admin-button">Gerenciar Produtos</button>
            </a>
            <a href="pedidos.php">
                <button class="admin-button">Gerenciar Pedidos</button>
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 - Sistema de Administração</p>
    </footer>

</body>
</html>
