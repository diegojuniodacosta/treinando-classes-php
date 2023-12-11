<?php

namespace Diego\Models;

use Diego\Interfaces\Alterado;
use Diego\Interfaces\Quantidade;

class Torneira extends Produtos implements Quantidade, Alterado
{
    public function podeVender($quantidade): bool
    {
        return $quantidade > '0';
    }

    public function ajustarPreco(): float
    {
        return ($this->preco > 50.0)
            ? $this->setPreco() * 2
            : $this->preco;
    }

    public function precoAlterado($preco): bool
    {
        return $preco;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

}