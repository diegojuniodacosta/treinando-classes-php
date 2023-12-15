<?php

namespace shopping\Models;

class Torneira extends Produto
{
    protected bool $filtro;

    public function isFiltro(): bool
    {
        return $this->filtro;
    }

    public function getFiltro(): bool
    {
        return $this->filtro;
    }


}
