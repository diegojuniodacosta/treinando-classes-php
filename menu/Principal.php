<?php

require_once 'Produto.php';

use Diego\Menu\Produto;

echo strtoupper("Seja bem-vindo ao Sistema!") . PHP_EOL;

$produtosCadastrados = array();
$produtoObject = null;
$separador = "---------------------------------------------------" . PHP_EOL;

while (true)
{
    echo $separador;
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
    global $produtosCadastrados, $produtoObject, $separador;

    switch ($entradaUsuario)
    {
        case "1":
            echo $separador;
            echo "Neste momento  cadastraremos um produto!!!" . PHP_EOL;
            echo "Escreva o nome do produto: ";

            $nomeProduto = trim(fgets(STDIN));

            $produtoObject = new Produto($nomeProduto);

            $produtosCadastrados[] = $produtoObject;

            break;

        case "2":
            echo $separador;
            echo strtoupper("A lista completa de produtos é: ") . PHP_EOL;
            foreach ($produtosCadastrados as $produto){
                echo "Id do produto: " . $produto->getId() . PHP_EOL;
                echo "Nome do produto: " . $produto->getNome() . PHP_EOL;
            }
            break;

    }
}