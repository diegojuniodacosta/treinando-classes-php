<?php

namespace Diego\Services;


class PrecoCalculado
{
    public function alteraPreco($produto, $preco): void
    {
        if ($produto->getPreco() != $preco ){
            echo "O valor do produto foi alterado para: $preco";
        }else {
            echo "Nada mudou, o valor continuou o mesmo!";
        }
    }
}