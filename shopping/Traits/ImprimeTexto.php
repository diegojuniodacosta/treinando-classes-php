<?php

namespace shopping\Traits;

trait ImprimeTexto
{
    public function __toString(): string
    {
        return
            'Foi cadastrado o produto: ' . $this->getNome() .
            'Com o Id: ' . $this->getId() . PHP_EOL .
            'Da marca: ' . $this->getMarca() .
            'Com o preço: ' . $this->getPreco() .
            'Data de criação: ' . $this->getCreatedDate() . PHP_EOL .
            'Data de atualização: ' . $this->getUpdateDate() . PHP_EOL;
    }
}