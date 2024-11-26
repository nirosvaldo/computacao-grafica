<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluguel de Mesa de Sinuca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff; /* Fundo branco */
            display: flex;
            justify-content: center; /* Alinha horizontalmente ao centro */
            align-items: center; /* Alinha verticalmente ao centro */
            min-height: 100vh; /* Garante que o body ocupe 100% da altura da tela */
        }
        .container {
            text-align: center; /* Centraliza o texto dentro dos elementos */
        }
        .mesa-sinuca {
            border: 2px solid #000000;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px; /* Maior separação entre os cards */
            width: 400px; /* Aumentado para tornar os cards maiores */
            margin: 0 auto; /* Garante centralização em casos específicos */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Adiciona sombra para destaque */
        }
        .mesa-sinuca h2 {
            font-size: 1.5em; /* Aumenta o título */
            margin-top: 0;
        }
        .mesa-sinuca p {
            margin-top: 10px;
            font-size: 1.1em; /* Aumenta o tamanho do texto */
        }
        .mesa-sinuca .preco {
            font-weight: bold;
            color: #000000;
        }
        .mesa-sinuca .botao-reservar {
            display: block;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 16px; /* Botão maior */
            border-radius: 6px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            margin-top: 15px;
            font-size: 1em;
        }
        .mesa-sinuca .botao-reservar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="mesa-sinuca">
            <h2>Mesa de Sinuca Standard</h2>
            <p><span class="preco">R$ 30,00</span> por hora</p>
            <a href="carrinho.php" class="botao-reservar">Adicionar ao Carrinho</a>
        </div>

        <div class="mesa-sinuca">
            <h2>Mesa de Sinuca Premium</h2>
            <p><span class="preco">R$ 50,00</span> por hora</p>
            <a href="carrinho.php" class="botao-reservar">Adicionar ao Carrinho</a>
        </div>

        <div class="mesa-sinuca">
            <h2>Mesa de Sinuca VIP</h2>
            <p><span class="preco">R$ 100,00</span> por hora</p>
            <a href="carrinho.php" class="botao-reservar">Adicionar ao Carrinho</a>
        </div>
        <a href="cliente.php" style="display: block; margin-top: 20px; text-decoration: none; color: #007bff; font-size: 1.2em;">Voltar</a>
    </div>
</body>
</html>
