<?php

namespace App\Models;


require_once '../Base/BaseEntity.php';
require_once 'Produto.php';

class Torneira extends Produto
{
    private bool $filtro;

    public function isFiltro(): bool
    {
        return $this->filtro;
    }

    public function getFiltro(): bool
    {
        return $this->filtro;
    }


}

$teste = new Torneira();



$teste->setNome('teste');
$teste->

var_dump($teste);
