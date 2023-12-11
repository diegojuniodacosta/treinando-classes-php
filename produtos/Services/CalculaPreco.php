<?php

namespace Diego\Services;

use AllowDynamicProperties;
use Diego\Models\Produtos;

#[AllowDynamicProperties] class CalculaPreco
{
    private float $totalPreco;

    public function precoAjustado(Produtos $produtos): void
    {
      $this->totalPreco += $produtos->ajustarPreco();
    }

}