<?php

namespace shopping\Models;

class Pedido
{
   private array $itens;
   private string $observation;

    /**
     * @param array $itens
     * @param string $observation
     *
     */
    public function __construct(array $itens)
    {
        $this->itens = $itens;
        //$this->observation = $observation;
    }

    public function calcularTotal(): float
    {
        $total = 0;
        foreach ($this->itens as $item){
            $total += $item->getTotal();
        }
        return $total;
    }

    /**
     * @return string
     */
    public function getObservation(): string
    {
        return $this->observation;
    }

    public function __toString(): string
    {
        return $this->observation;
    }
}