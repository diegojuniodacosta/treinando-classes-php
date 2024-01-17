<?php

namespace shopping\Models;

use shopping\Base\BaseEntity;
use shopping\Traits\EntradaDois;
use shopping\Traits\EntradaQuatro;
use shopping\Traits\EntradaCinco;


class Produto extends BaseEntity
{
    use EntradaDois;
    use EntradaQuatro;
    use EntradaCinco;
    protected string $nome;
    protected Marca $marca;
    protected float $preco;

    public function __construct(string $nome, string $marca, float $preco)
    {
        $this->id          = ++self::$incrementador;
        $this->createdDate = \date('d/m/y H:i');
        $this->updateDate  = \date('d/m/y H:i');
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

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

}


