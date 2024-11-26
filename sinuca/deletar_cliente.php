<?php
// Incluindo o arquivo de configuração do banco de dados
include_once('config.php');

// Verificando se o administrador está logado
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login_admin.php");
    exit;
}

// Verificando se o ID foi passado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Deletando o cliente
    $sql = "DELETE FROM clientes WHERE id = $id";
    
    if ($conexao->query($sql) === TRUE) {
        echo "Cliente excluído com sucesso!";
        header("Location: admin.php"); // Redireciona de volta para a página de admin
    } else {
        echo "Erro ao excluir o cliente: " . $conexao->error;
    }
} else {
    echo "ID do cliente não fornecido!";
    exit;
}
?>
