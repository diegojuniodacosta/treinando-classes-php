<?php

namespace shopping\Traits;

trait EntradaDois
{
    public function __toString(): string
    {
        global $linhas;
        return
            'Foi cadastrado o produto: ' . $this->getNome() . PHP_EOL .
            'Com o Id: ' . $this->getId() . PHP_EOL .
            'Da marca: ' . $this->getMarca() . PHP_EOL .
            'Com o preço: ' . $this->getPreco() . PHP_EOL .
            'Data de criação: ' . $this->getCreatedDate() . PHP_EOL .
            'Data de atualização: ' . $this->getUpdateDate() . PHP_EOL .
            $linhas . PHP_EOL;
    }
}