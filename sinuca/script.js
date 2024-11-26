// Selecionar os elementos do carrinho
const items = document.querySelectorAll('.item');
const totalElement = document.querySelector('.total p');

// Atualizar o total
function atualizarTotal() {
    let total = 0;
    items.forEach(item => {
        const quantidade = item.querySelector('input').value;
        const preco = parseFloat(item.querySelector('p:nth-child(4)').textContent.replace('R$', '').replace(',', '.'));
        total += quantidade * preco;
    });
    totalElement.textContent = `Total: R$ ${total.toFixed(2).replace('.', ',')}`;
}

// Adicionar evento nos inputs
items.forEach(item => {
    item.querySelector('input').addEventListener('change', atualizarTotal);
});

// Remover itens
items.forEach(item => {
    item.querySelector('button').addEventListener('click', () => {
        item.remove();
        atualizarTotal();
    });
});
const express = require('express');
const app = express();

app.use(express.json());

let carrinho = [];

// Adicionar item ao carrinho
app.post('/carrinho', (req, res) => {
    const item = req.body;
    carrinho.push(item);
    res.status(201).json({ mensagem: 'Item adicionado ao carrinho', carrinho });
});

// Listar itens no carrinho
app.get('/carrinho', (req, res) => {
    res.json(carrinho);
});

// Remover item do carrinho
app.delete('/carrinho/:id', (req, res) => {
    const id = req.params.id;
    carrinho = carrinho.filter(item => item.id !== id);
    res.json({ mensagem: 'Item removido', carrinho });
});

app.listen(3000, () => console.log('Servidor rodando na porta 3000'));
