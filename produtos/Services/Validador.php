<?php

namespace Diego\Services;

class Validador
{
    public function existeQuantidade($produto, $quantidade): void
    {
        echo $produto->podeVender($quantidade)
            ? "Pode vender, Possui quantidade no estoque!"
            : "Deu ruim, a quantidade $quantidade informada não pode ser menor que 1";
    }

}