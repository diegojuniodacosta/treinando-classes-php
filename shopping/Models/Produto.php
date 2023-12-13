<?php

namespace App\Models;

use App\Base\BaseEntity;

class Produto extends BaseEntity
{
    private string $nome;
    private string $marca;
    private string $preco;
    private string $quantidade;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }

    public function setPreco(string $preco): void
    {
        $this->preco = $preco;
    }

    public function getQuantidade(): string
    {
        return $this->quantidade;
    }

    public function setQuantidade(string $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

}

