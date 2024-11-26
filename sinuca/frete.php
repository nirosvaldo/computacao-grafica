<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Frete</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f9; /* Cor de fundo mais neutra */
}

.frete-calculadora {
    max-width: 500px; /* Aumenta a largura máxima do formulário */
    margin: 50px auto; /* Centraliza a div no meio da página com um espaçamento superior */
    padding: 30px; /* Aumenta o padding para mais espaçamento interno */
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #fff; /* Fundo branco para o formulário */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

.frete-calculadora h2 {
    font-size: 1.5em; /* Aumenta o tamanho do título */
    text-align: center;
    margin-bottom: 20px;
    color: #333; /* Cor do título */
}

.frete-calculadora label {
    display: block;
    margin-bottom: 12px; /* Aumenta o espaçamento entre label e input */
    font-size: 1.1em; /* Aumenta o tamanho da fonte */
    color: #333; /* Cor do texto */
}

.frete-calculadora input[type="text"] {
    width: 100%;
    padding: 12px; /* Aumenta o padding dentro do input */
    font-size: 1.1em; /* Aumenta o tamanho da fonte dentro do input */
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 18px; /* Aumenta o espaçamento entre os inputs */
}

.frete-calculadora .botao-calcular {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px; /* Aumenta o padding do botão */
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em; /* Aumenta o tamanho da fonte no botão */
    transition: background-color 0.3s;
    width: 100%; /* Botão ocupa toda a largura */
}

.frete-calculadora .botao-calcular:hover {
    background-color: #0056b3; /* Cor do botão ao passar o mouse */
}

.frete-calculadora .resultado {
    margin-top: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    color: #333; /* Cor do texto do resultado */
}

.frete {
    text-align: center;
    margin-top: 25px;
}

.frete a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    font-size: 1.1em; /* Aumenta o tamanho da fonte no link */
}

.frete a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>
    <div class="frete-calculadora">
        <h2>Calculadora de Frete</h2>
        <label for="cep-origem">CEP de Origem:</label>
        <input type="text" id="cep-origem" placeholder="Digite o CEP de origem">
        <label for="cep-destino">CEP de Destino:</label>
        <input type="text" id="cep-destino" placeholder="Digite o CEP de destino"><br>

        <br>  <button class="botao-calcular" onclick="calcularFrete()">Calcular</button>

        <div class="resultado" id="resultado">
            <!-- Aqui será exibido o resultado do cálculo de frete -->
        </div>
    </div>

    <script>
        function calcularFrete() {
            var cepOrigem = document.getElementById('cep-origem').value;
            var cepDestino = document.getElementById('cep-destino').value;

            // Simulação de cálculo de frete (pode ser implementado com uma API real)
            var valorFrete = calcularValorFrete(cepOrigem, cepDestino);

            // Exibir resultado na div de resultado
            var resultadoDiv = document.getElementById('resultado');
            resultadoDiv.innerHTML = `<p>O valor do frete de ${cepOrigem} para ${cepDestino} é R$ ${valorFrete.toFixed(2)}</p>`;
        }

        // Função de simulação de cálculo de frete (pode ser substituída por uma chamada a API real)
        function calcularValorFrete(cepOrigem, cepDestino) {
            // Exemplo simples: valor fixo para cada frete
            var valorFrete = Math.random() * 100; // Exemplo: valor aleatório entre 0 e 100
            return valorFrete;
        }
    </script>
   <br>  <div class="frete"> <a href="cliente.php">Voltar</a></div>
    
</body>
</html>
