<?php

namespace shopping\Traits;


trait EntradaQuatro
{
    public function __toQuatroHeader(): string
    {
        return
        "Vamos fazer o pedido" . PHP_EOL .
        'Produto escolhido: ' . $this->getNome() . PHP_EOL .
        'O preço do produto é: ' . $this->getPreco() . PHP_EOL .
        'Escolha a quantidade: ' . PHP_EOL;
    }

    public function __toQuatroBody(): string
    {
        global $escolhaQuantidade;

        $escolhaQuantidade = trim(fgets(STDIN));

        return
        "Quantidade escolhida é: " . $escolhaQuantidade . PHP_EOL .
        "Tem alguma observação: " . PHP_EOL;
    }

}