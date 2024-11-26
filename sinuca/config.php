<?php
// Verifica se a sessão já foi iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definir as credenciais de conexão com o banco de dados
$host = "localhost";
$dbname = "sinuca"; // Nome do banco de dados
$username = "root"; // Usuário do banco de dados
$password = "escola"; // Senha do banco de dados

// Criar a conexão com o banco de dados
$conexao = new mysqli($host, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Verifica se o administrador está logado
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php"); // Redireciona para a página de login caso não esteja logado
    exit;
}
?>
