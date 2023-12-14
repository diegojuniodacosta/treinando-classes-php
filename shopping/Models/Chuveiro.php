<?php

namespace App\Models;

class Chuveiro extends Produto
{
    private string $potencia;

    public function getPotencia(): string
    {
        return $this->potencia;
    }

    public function setPotencia(string $potencia): void
    {
        $this->potencia = $potencia;
    }

}

