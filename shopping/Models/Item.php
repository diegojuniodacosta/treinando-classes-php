<?php

namespace shopping\Models;

class Item
{
    private int $quantidade;

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }
}