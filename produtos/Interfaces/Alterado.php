<?php

namespace Diego\Interfaces;

interface Alterado
{
    public function precoAlterado($preco): bool;
}