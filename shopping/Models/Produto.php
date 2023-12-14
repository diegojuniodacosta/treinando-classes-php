<?php

namespace App\Models;

use App\Base\BaseEntity;

class Produto extends BaseEntity
{
    protected string $nome;
    protected string $marca;
    protected string $preco;
    private string $quantidade;

    public function __construct(string $nome, string $marca, string $preco)
    {
        $this->nome  = $nome;
        $this->marca = $marca;
        $this->preco = $preco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }


}


