<?php

namespace shopping\Models;

class Chuveiro extends Produto
{
    private string $potencia;

    /**
     * @param string $potencia
     * @param $nome
     * @param $marca
     * @param $preco
     */
    public function __construct(string $potencia, $nome, $marca, $preco)
    {
        $this->id          = ++self::$incrementador;
        $this->createdDate = \date('d/m/y H:i');
        $this->updateDate  = \date('d/m/y H:i');
        parent::__construct($nome, $marca, $preco);
        $this->potencia = $potencia;
    }

    public function getPotencia(): string
    {
        return $this->potencia;
    }

    public function setPotencia(string $potencia): void
    {
        $this->potencia = $potencia;
    }

}

