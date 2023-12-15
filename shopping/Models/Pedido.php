<?php

namespace shopping\Models;

class Pedido
{
    private string $total;

    public function getTotal(): string
    {
        return $this->total;
    }

    public function setTotal(string $total): void
    {
        $this->total = $total;
    }
}