<?php

namespace shopping\Data;

use Exception;
use shopping\Models\Chuveiro;
use shopping\Models\Produto;
use shopping\Models\Torneira;

class ProdutosData{

    protected array $produtosCadastrados = array();

    public function popular(): void
    {
        $chuveiro = new Chuveiro('100w', 'Ducha', 'Lorenzetti', '100.0');

        $torneira = new Torneira('Torneira', 'Deca', '50.0');

        array_push($this->produtosCadastrados, $chuveiro, $torneira);

    }

    public function adicionar(Produto $produto): void
    {
        $this->produtosCadastrados[] = $produto;
    }

    public function recuperarTodos(): array
    {
        return $this->produtosCadastrados;
    }


    /**
     * @throws Exception
     */
    public function recuperarPorId(int $idProduto): Produto
    {
        foreach ($this->produtosCadastrados as $produto) {
            if ($idProduto == $produto->getId()) {
                return $produto;
            }
        }
        throw new Exception('Produto não encontrado' . PHP_EOL);
    }
}