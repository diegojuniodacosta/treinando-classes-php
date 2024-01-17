<?php

namespace shopping\Traits;

use shopping\Models\Pedido;
trait EntradaCinco
{
    public function __toCincoHeader(): string
    {
        return
        "Vamos Imprimir Nota Fiscal" . PHP_EOL .
        'Digite o nome do cliente: ' . PHP_EOL ;
    }

    public function __toCincoBody(): string
    {
        global $nomeCliente, $totalPedido, $notaFiscal, $observacao, $escolhaQuantidade;

        $nomeCliente = trim(fgets(STDIN));

        return
        $notaFiscal =
            PHP_EOL .
            "Nome do Cliente: " . $nomeCliente . PHP_EOL .
            "Produto: " . $this->getNome() . PHP_EOL .
            "Marca: " . $this->getMarca() . PHP_EOL .
            "Preço unitário: " . $this->getPreco() . PHP_EOL .
            "Quantidade: " . $escolhaQuantidade . PHP_EOL .
            "Valor Total do Pedido: " . $totalPedido . PHP_EOL .
            "Data de Venda: " . $this->getCreatedDate() . PHP_EOL .
            "Observação: " . $observacao . PHP_EOL .
            "Nota fiscal gerada corretamente" . PHP_EOL;
    }
}