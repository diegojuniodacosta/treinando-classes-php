<?php

namespace shopping\Models;
class Marca
{
    protected string $marca;

    /**
     * @param string $marca
     */
    public function __construct(string $marca)
    {
        $this->marca = $marca;
    }

    public function __toString(): string
    {
        return $this->marca;
    }
}