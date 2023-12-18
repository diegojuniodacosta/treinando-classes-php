<?php

namespace shopping;

require_once 'Vendor/autoloader.php';

// Vamos informar quais classes iremos utilizar
use shopping\Models\Produto;

$linhas = "\n============================================\n";

echo "Vamos apresentar nosso projeto Shopping!!";

echo $linhas;

while (true) {
    echo "Escolha uma das opções do menu: \n";
    echo "1) Cadastrar Produto\n";
    echo "2) Visualizar Produtos\n";
    echo "3) Escolher Produto\n\n";

    $entrada = trim(fgets(STDIN));

    AcessaOpcoes($entrada);

}
function AcessaOpcoes($entrada): void
{
    global $produtosCadastrados, $linhas, $cadastrado;

    if ($entrada == '1'){
        echo "Digite o nome do produto: ";
        $nomeProduto = fgets(STDIN);
        echo "Digite a marca do produto: ";
        $marcaProduto = fgets(STDIN);
        echo "Digite o preço do produto: ";
        $precoProduto = fgets(STDIN);
        echo $linhas;

        $novoProduto = new Produto($nomeProduto, $marcaProduto, $precoProduto);

        $produtosCadastrados[] = $novoProduto;

        //file_put_contents('produtos.txt', $novoProduto, FILE_APPEND);
        //   echo file_get_contents('produtos.txt');
    }

    if ($entrada == '2'){
        if (is_null($produtosCadastrados)){
            echo "Nenhum Produto Cadastrado" . PHP_EOL;
        }else{
            foreach ($produtosCadastrados as $produto){
                echo $produto->__toString();
            }
        }
    }

    if ($entrada == '3'){
        echo "Escolha os produtos: \n";
        foreach ($produtosCadastrados as $cadastrado){
            echo "Id: " . $cadastrado->getId();
            echo " Referente ao produto: " . $cadastrado->getNome();
        }
        echo "Digite o Id: " . PHP_EOL;
        $escolhaProduto = fgets(STDIN);
        foreach ($produtosCadastrados as $cadastrado)
        if ($escolhaProduto == $cadastrado->getId()){
            echo "Produto escolhido é: " . $cadastrado->getNome();
        }
    }

}




