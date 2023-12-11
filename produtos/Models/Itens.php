<?php

namespace Diego\Models;

abstract class Itens
{
    protected int $id;
    protected int $quantidade;

    /**
     * @param $id
     * @param $quantidade
     */
    public function __construct( $id, $quantidade)
    {
        $this->id = $id;
        $this->quantidade = $quantidade;
    }

}