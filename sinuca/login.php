<?php
session_start();

// Verificando se o usuário já está logado
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin.php"); // Redireciona para a página de administração se já estiver logado
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe as credenciais do formulário de login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Credenciais de login (aqui você deve substituir com uma verificação no banco de dados)
    $admin_username = 'admin';
    $admin_password = '1234'; // Senha fictícia para exemplo

    // Verificando as credenciais
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php"); // Redireciona para o painel de administração
        exit;
    } else {
        $error = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Admin</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Caixa de login */
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilos para o formulário */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            text-align: left;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Mensagem de erro */
        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login de Administrador</h2>

        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>

        <form method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Entrar">
        </form>
    </div>

</body>
</html>
