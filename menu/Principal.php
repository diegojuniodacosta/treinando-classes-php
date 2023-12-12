<?php

require_once 'Produto.php';

use Diego\Menu\Produto;

echo strtoupper("Seja bem-vindo ao Sistema!") . PHP_EOL;

$produtosCadastrados = array();
$produtoObject = null;

while (true)
{
    echo "MENU DO SISTEMA! Digite: " . PHP_EOL;
    echo "1) Cadastrar produto; " . PHP_EOL;
    echo "2) Visualizar produtos cadastrados; " . PHP_EOL;

    $entrada = fgets(STDIN);

    if ($entrada != 1 && $entrada != 2){
        echo "Opção Inválida" . PHP_EOL;
        echo "Digite 1 ou 2" . PHP_EOL;
    }

    executaFuncoes($entrada);
}

function executaFuncoes( string $entradaUsuario): void
{
    global $produtosCadastrados, $produtoObject;

    switch ($entradaUsuario)
    {
        case "1":
            echo "Neste momento  cadastraremos um produto!!!" . PHP_EOL;
            echo "Escreva o nome do produto: ";

            $nomeProduto = trim(fgets(STDIN));

            $produtoObject = new Produto($nomeProduto);

            //echo $nomeProduto;

            $produtosCadastrados[] = $produtoObject;

            break;

        case "2":

            foreach ($produtosCadastrados as $produto){
                echo strtoupper("A lista completa de produtos é: ") . PHP_EOL;
                echo "Id do produto: " . Produto::$incrementador . PHP_EOL;
                echo "Nome do produto: " . $produto->getNome() . PHP_EOL;
            break;
            }
    }
}