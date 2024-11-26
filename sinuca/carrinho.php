<?php
// Debug: Exibir todos os dados enviados via POST
echo '<pre>';
var_dump($_POST);  // Isso deve mostrar os dados enviados no formulário
echo '</pre>';

// Verifica se a sessão já foi iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Definir as credenciais de conexão com o banco de dados
$host = "localhost";
$dbname = "sinuca"; // Nome do banco de dados principal
$username = "root"; // Usuário do banco de dados
$password = "escola"; // Senha do banco de dados

// Conectar ao banco de dados para o site principal (sinuca_site)
$conexao_site = new mysqli($host, $username, $password, $dbname);

// Verificar a conexão com o banco sinuca_site
if ($conexao_site->connect_error) {
    die("Falha na conexão com o banco de dados sinuca_site: " . $conexao_site->connect_error);
}

// Conectar ao banco de dados sinuca (onde está a tabela clientes)
$dbname_sinuca = "sinuca"; // Nome do banco de dados de clientes (sinuca)
$conexao_sinuca = new mysqli($host, $username, $password, $dbname_sinuca);

// Verificar a conexão com o banco sinuca
if ($conexao_sinuca->connect_error) {
    die("Falha na conexão com o banco de dados sinuca: " . $conexao_sinuca->connect_error);
}

// Verifica se o CPF foi enviado via POST
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;

if (empty($cpf)) {
    echo "O CPF não foi informado.<br>";
} else {
    echo "CPF informado: " . htmlspecialchars($cpf) . "<br>";

    // Aqui você pode adicionar o código para processar o CPF
    // Exemplo fictício de consulta ao banco de dados:
    $sql = "SELECT * FROM clientes WHERE cpf = ?";
    $stmt = $conexao_sinuca->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo "Cliente encontrado!";
    } else {
        echo "Nenhum cliente encontrado com o CPF informado.";
    }
    $stmt->close();
}
$conexao_sinuca->close();
?>
