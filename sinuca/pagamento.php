<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4; /* Cor de fundo neutra */
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff; /* Fundo branco para o conteúdo */
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Sombras para dar profundidade */
        }
        .detalhes-pedido {
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .detalhes-pedido h2 {
            font-size: 1.5em;
            margin-top: 0;
            color: #333; /* Cor de título mais escura */
        }
        .item {
            margin-bottom: 12px;
            font-size: 1.1em;
        }
        .item span {
            font-weight: bold;
            color: #555; /* Cor para destaque das labels */
        }
        .form-pagamento {
            margin-top: 20px;
        }
        .form-pagamento label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        .form-pagamento input[type="text"], 
        .form-pagamento input[type="email"], 
        .form-pagamento input[type="number"], 
        .form-pagamento select {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .form-pagamento input[type="text"]:focus,
        .form-pagamento input[type="email"]:focus,
        .form-pagamento input[type="number"]:focus,
        .form-pagamento select:focus {
            border-color: #007bff; /* Cor de destaque ao focar nos campos */
            outline: none;
        }
        .form-pagamento .botao-pagar {
            background-color: #28a745; /* Cor verde para o botão de pagamento */
            color: #fff;
            border: none;
            padding: 15px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            width: 100%; /* Botão em largura total */
            box-sizing: border-box;
        }
        .form-pagamento .botao-pagar:hover {
            background-color: #218838; /* Cor mais escura ao passar o mouse */
        }
        .pagamento {
            text-align: center;
            margin-top: 20px;
        }
        .pagamento a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        .pagamento a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="detalhes-pedido">
            <h2>Detalhes do Pedido</h2>
            <div class="item">
                <span>Produto:</span>
            </div>
            <div class="item">
                <span>Quantidade:</span> 
            </div>
            <div class="item">
                <span>Total:</span> 
            </div>
        </div>

        <form class="form-pagamento" action="processar_pagamento.php" method="post">
            <h2>Informações de Pagamento</h2>
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="numero-cartao">Número do Cartão:</label>
            <input type="text" id="numero-cartao" name="numero-cartao" required>

            <label for="validade">Data de Validade:</label>
            <input type="text" id="validade" name="validade" placeholder="MM/AA" required>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" maxlength="3" required>

            <label for="parcelas">Parcelas:</label>
            <select id="parcelas" name="parcelas">
                <option value="1">1x sem juros</option>
                <option value="2">2x com juros</option>
                <option value="3">3x com juros</option>
                <option value="4">4x com juros</option>
            </select>

            <button type="submit" class="botao-pagar">Pagar Agora</button>
        </form>
    </div>

    <div class="pagamento">
        <a href="cliente.php">Voltar</a>
    </div>
</body>
</html>
