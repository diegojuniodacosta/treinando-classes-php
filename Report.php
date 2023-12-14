<?php

require_once 'autoload.php';

// Vamos informar quais classes iremos utilizar
use App\Models\Produto;

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
    global $produtosCadastrados, $novoProduto, $linhas;

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
    }

    if ($entrada == '2'){
        foreach ($produtosCadastrados as $produto){
            $teste =
                'Foi cadastrado o produto :' . $produto->getNome() .
                'Da marca: ' . $produto->getMarca() .
                'Com o preço: ' . $produto->getPreco(). PHP_EOL;
            echo $teste;
            file_put_contents('produtos.txt',$teste, FILE_APPEND);
            //file_put_contents('cursos-php.txt', $novoCurso, FILE_APPEND);
        }
    }

    if ($entrada == '3'){
        echo "Ainda não foi feito! \n\n";
    }
}




