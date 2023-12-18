<?php

namespace shopping\Models;

use shopping\Base\BaseEntity;
use shopping\Traits\ImprimeTexto;

class Produto extends BaseEntity
{
    use ImprimeTexto;
    protected string $nome;
    protected Marca $marca;
    protected string $preco;

    public function __construct(string $nome, string $marca, string $preco)
    {
        global $data;
        $this->id          = ++self::$incrementador;
        $this->createdDate = $data;
        $this->updateDate  = $data;
        $this->nome        = $nome;
        $this->marca       = new Marca($marca);
        $this->preco       = $preco;

    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getMarca(): Marca
    {
        return $this->marca;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }

}


