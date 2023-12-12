<?php

namespace Diego\Menu;

class Produto
{
    public int $id;
    public string $nome;
    public static int $incrementador = 0;

    public function __construct(string $nome)
    {
        $this->id = ++self::$incrementador;
        $this->nome = $nome;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public static function getIncrementador(): int
    {
        return self::$incrementador;
    }


}