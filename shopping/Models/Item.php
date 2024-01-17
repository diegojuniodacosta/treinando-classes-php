<?php

namespace shopping\Models;

class Item
{
    private float $quantidade;
    private Produto $produto;

    /**
     * @param float $quantidade
     * @param Produto $produto
     */
    public function __construct(float $quantidade, Produto $produto)
    {
        $this->quantidade = $quantidade;
        $this->produto    = $produto;
    }

    public function getTotal(): float|int
    {
        return $this->quantidade * $this->produto->getPreco();
    }

    public function __toString(): string
    {
        return $this->quantidade;
    }
}