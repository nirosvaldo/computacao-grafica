<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Fichas de Sinuca</title>
    <style>
        /* Estilo geral do corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Cor de fundo neutra */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centraliza horizontalmente */
            justify-content: center; /* Centraliza verticalmente */
            min-height: 100vh; /* Garante que a página ocupe toda a altura da tela */
        }

        /* Container para os cards de fichas */
        .container {
            display: flex;
            flex-direction: column; /* Cards um embaixo do outro */
            align-items: center;
            gap: 20px; /* Espaço entre os pacotes */
            width: 100%;
            max-width: 400px; /* Limita o tamanho máximo dos cards */
            padding: 20px;
            margin-top: 20px;
        }

        /* Estilo da div de cada ficha */
        .ficha-sinuca {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 10px; /* Espaço entre os pacotes */
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Efeito de hover */
            text-align: center;
            max-width: 350px; /* Aumenta o tamanho do card */
        }

        .ficha-sinuca:hover {
            transform: scale(1.05); /* Aumenta o tamanho quando passa o mouse */
        }

        .ficha-sinuca h2 {
            font-size: 1.5em;
            margin-top: 0;
            color: #333;
        }

        .ficha-sinuca p {
            font-size: 1.1em;
            margin-top: 5px;
            color: #555;
        }

        /* Estilos para preço e quantidade */
        .ficha-sinuca .preco {
            font-weight: bold;
            color: #000;
            font-size: 1.3em;
        }

        .ficha-sinuca .quantidade {
            font-weight: bold;
            font-size: 1.2em;
            color: #333;
        }

        /* Estilo do botão "Adicionar ao Carrinho" */
        .ficha-sinuca .botao-adicionar {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            margin-top: 15px;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .ficha-sinuca .botao-adicionar:hover {
            background-color: #0056b3;
        }

        /* Estilo do link "Voltar" */
        a.voltar {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        a.voltar:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="ficha-sinuca">
            <h2>Fichas de Sinuca - Pacote Bronze</h2>
            <p><span class="quantidade">20 fichas</span> - <span class="preco">R$ 50,00</span></p>
            <a class="botao-adicionar" href="carrinho.php">Adicionar ao Carrinho</a>
        </div>

        <div class="ficha-sinuca">
            <h2>Fichas de Sinuca - Pacote Prata</h2>
            <p><span class="quantidade">50 fichas</span> - <span class="preco">R$ 100,00</span></p>
            <a class="botao-adicionar" href="carrinho.php">Adicionar ao Carrinho</a>
        </div>

        <div class="ficha-sinuca">
            <h2>Fichas de Sinuca - Pacote Ouro</h2>
            <p><span class="quantidade">100 fichas</span> - <span class="preco">R$ 200,00</span></p>
            <a class="botao-adicionar" href="carrinho.php">Adicionar ao Carrinho</a>
        </div>
    </div>
    
    <a class="voltar" href="cliente.php">Voltar</a>
</body>
</html>
