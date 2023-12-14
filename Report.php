<?php

require_once 'autoload.php';

// Vamos informar quais classes iremos utilizar
use App\Models\Produto;
use App\Base\BaseEntity;

$produtosCadastrados = [];

$linhas = "\n============================================\n";

echo "Vamos apresentar nosso projeto Shopping!";

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
        foreach ($produtosCadastrados as $produto){
            echo $produto->__toString();
        }
    }

    if ($entrada == '3'){
        echo "Escolha os produtos: \n";
        foreach ($produtosCadastrados as $cadastrado){
            echo "Digite o Id: ";
            echo $cadastrado->getId();
            echo "Referente ao produto: " . $cadastrado->getNome();
        }
    }

    $entrada1 = fgets(STDIN);

}




