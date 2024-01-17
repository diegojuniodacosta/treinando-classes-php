<?php

namespace shopping;

require_once 'Vendor/autoloader.php';

// Vamos informar quais classes iremos utilizar

use Exception;
use shopping\Models\Chuveiro;
use shopping\Models\Item;
use shopping\Models\Pedido;
use shopping\Models\Produto;
use shopping\Models\Torneira;
use shopping\Services\EntradaSeis;

$linhas = "\n============================================\n";

echo "Vamos apresentar nosso projeto Shopping!!";

echo $linhas;

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
    global $produtosCadastrados, $linhas, $cadastrado, $escolhaQuantidade, $observacao,
           $totalPedido, $novoProduto, $notaFiscal, $produto, $produtosNaoNulos, $problema;

    $novoChuveiro = new Chuveiro('100w', 'Ducha', 'Lorenzetti', '100.0');

    $novaTorneira = new Torneira('Torneira', 'Deca', '50.0');

    $produtosCadastrados = [$novoChuveiro, $novaTorneira, $novoProduto];

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

        echo "Cadastrar novo produto" . PHP_EOL;

    }

    if ($entrada == '2') {

        if (is_null($produtosCadastrados)){
            echo 'Cadastre um produto antes de continuar!' . PHP_EOL;
            echo $linhas;
            return;
        }

        // Para não adicionar $produto nulos
        $produtosNaoNulos = array();
        foreach ($produtosCadastrados as $produto){
            if ($produto !== null){
                $produtosNaoNulos[] = $produto;
                echo $produto->__toString();
            }
        }
        $produtosCadastrados = $produtosNaoNulos;
}

    try {
        if ($entrada == '3') {
            echo "Escolha os produtos: \n";
            foreach ($produtosCadastrados as $cadastrado) {
               /*if ($cadastrado == null){
                    throw new \Error('Deu ruim', '100');
                }*/
                if ($cadastrado == ''){
                    throw new \Exception('Deu ruim 2', '200');
                }
                echo "Id: " . $cadastrado->getId();
                echo " Referente ao produto: " . $cadastrado->getNome() . PHP_EOL;
            }
            echo "Digite o Id: " . PHP_EOL;
            $escolhaProduto = trim(fgets(STDIN));


            // Converte $idsProdutos para o mesmo tipo de $escolhaProduto
            $idsProdutos = array_map(function ($produto) {
                return $produto->getId();
            }, $produtosCadastrados);

            // Verifica se tem $escolhaProduto em $idsProdutos
            if (in_array($escolhaProduto, $idsProdutos)) {
                foreach ($produtosCadastrados as $cadastrado) {
                    if ($escolhaProduto == $cadastrado->getId()) {
                        echo "Produto escolhido é: " . $cadastrado->getNome() . PHP_EOL;
                        break;
                    }
                }
                return;
            }
            echo "Produto não encontrado.";
        }
    }catch (\Error $problema) {
        print 'Erro na Entrada 1' . PHP_EOL;
        print $problema->getCode() . PHP_EOL;
        print $problema->getFile() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
        echo $problema->getPrevious() . PHP_EOL;
        var_dump($problema->getTrace()) . PHP_EOL;
    }
    catch (\Exception $e){
        $erro = array(
            'Mensagem' => $e->getMessage(),
            'Código'   => $e->getCode(),
            'Linha'    => $e->getLine(),
            'Arquivo'  => $e->getFile(),
            'AsString' => $e->getTraceAsString(),
        );
        $erro2 = 'Código de Erro';
        print_r($erro);
        printf($erro2);
    }

    if ($entrada == '4'){
        echo $cadastrado->__toQuatroHeader();

        echo $cadastrado->__toQuatroBody();


        $novoItem = new Item($escolhaQuantidade, $cadastrado);

        $novopedido = new Pedido([$novoItem]);

        $observacao = trim(fgets(STDIN));

        echo "Observação: " . $observacao . PHP_EOL;

        $totalPedido = $novopedido->calcularTotal();

    }

    if ($entrada == '5'){
        echo $cadastrado->__toCincoHeader();

        echo $cadastrado->__toCincoBody();

        $diretorioArquivo = 'Nota/nota-fiscal.txt';

        file_put_contents($diretorioArquivo, $notaFiscal, FILE_APPEND);
    }

    if ($entrada == '6'){
        $entrada6 = new EntradaSeis();
        echo $entrada6->toSeis();
    }
}