<?php

namespace shopping;

require_once 'Vendor/autoloader.php';

// Vamos informar quais classes iremos utilizar

use Exception;
use shopping\Data\ProdutosData;
use shopping\Models\Item;
use shopping\Models\Pedido;
use shopping\Models\Produto;
use shopping\Services\EntradaSeis;

$linhas = "\n============================================\n";

echo "Vamos apresentar nosso projeto Shopping!!";

echo $linhas;

$produtosData = new ProdutosData();

$produtosData->popular();

while (true) {
    echo "Escolha uma das opções do menu: \n";
    echo "1) Cadastrar Produto\n";
    echo "2) Visualizar Produtos\n";
    echo "3) Escolher Produto\n";
    echo "4) Realizar Pedido\n";
    echo "5) Imprimir Nota Fiscal\n";
    echo "6) Sair\n\n";

    $entrada = trim(fgets(STDIN));

    if ($entrada <= '0' || $entrada >= '7'){
        echo "Digite uma opção válida\n\n";
    }

    AcessaOpcoes($entrada);

}

/**
 * @throws Exception
 */
function AcessaOpcoes($entrada): void
{
    global $linhas, $cadastrado, $escolhaQuantidade, $observacao, $totalPedido, $novoProduto,
           $notaFiscal, $produto, $produtos, $novopedido, $produtosData, $produtoExistente;

    if ($entrada == '1'){
        echo "Digite o nome do produto: ";
        $nomeProduto = fgets(STDIN);
        echo "Digite a marca do produto: ";
        $marcaProduto = fgets(STDIN);
        echo "Digite o preço do produto: ";
        $precoProduto = fgets(STDIN);
        echo $linhas;

        $novoProduto = new Produto($nomeProduto, $marcaProduto, $precoProduto);

        $produtosData->adicionar($novoProduto);

    }

    if ($entrada == '2') {

        $produtos = $produtosData->recuperarTodos();

        foreach ($produtos as $produto){
            if ($produto !== null){
                echo $produto->__toString();
            }
        }
}

        if ($entrada == '3') {
            echo "Escolha os produtos: \n";

            $produtos = $produtosData->recuperarTodos();

            foreach ($produtos as $cadastrado) {
               echo "Id: " . $cadastrado->getId();
               echo " Referente ao produto: " . $cadastrado->getNome() . PHP_EOL;
            }
            echo "Digite o Id: " . PHP_EOL;
            $escolhaProduto = trim(fgets(STDIN));

            try {
                $produtoExistente = $produtosData->recuperarPorId($escolhaProduto);

                echo 'Produto escolhido: ' . $produtoExistente->getNome() . PHP_EOL;
            }catch (Exception $ex){
                echo $ex->getMessage();
            }
        }


    if ($entrada == '4'){

        if ($cadastrado == null){
            echo 'Escolha o produto na opção 3' . PHP_EOL;
        }else{

            echo $cadastrado->__toQuatroHeader();

            echo $cadastrado->__toQuatroBody();

            $observacao = trim(fgets(STDIN));

            $novoItem = new Item($escolhaQuantidade, $cadastrado);

            $novopedido = new Pedido([$novoItem], $observacao);

            echo "Observação: " . $novopedido->getObservation() . PHP_EOL;

            $totalPedido = $novopedido->calcularTotal();
        }

    }

    if ($entrada == '5'){

        echo $cadastrado->__toCincoHeader();

        echo $cadastrado->__toCincoBody($novopedido);

        $diretorioArquivo = 'Nota/nota-fiscal.txt';

        file_put_contents($diretorioArquivo, $notaFiscal, FILE_APPEND);
    }

    if ($entrada == '6'){
        $entrada6 = new EntradaSeis();
        echo $entrada6->toSeis();
    }
}