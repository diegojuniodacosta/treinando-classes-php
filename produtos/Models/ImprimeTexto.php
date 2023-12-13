<?php

namespace Diego\Models;

trait ImprimeTexto
{
    public function __toString(): string
    {
        return "O cliente está comprando a quantidade de {$this->quantidade} produtos com o nome "
        . self::$nome . " do tipo {$this->tipo} e da marca {$this->marca}
        que no estoque possui o Identificador {$this->id} com o preço: R$ {$this->preco}";
    }
}