<?php

namespace App\Models;


require_once '../Base/BaseEntity.php';
require_once 'Produto.php';

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
