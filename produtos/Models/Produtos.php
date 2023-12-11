<?php

namespace Diego\Models;

use AllowDynamicProperties;

#[AllowDynamicProperties] abstract  class Produtos extends Itens
{
    use ImprimeTexto;
    protected static string $nome;
    protected string $marca;
    protected string $tipo;
    protected float $preco;

    /**
     * @param string $nome
     * @param string $marca
     * @param string $tipo
     * @param float $preco
     */
    public function __construct(int $id, string $nome ,int $quantidade, string $marca, string $tipo, float $preco)
    {
        parent::__construct($id, $quantidade);
        $this->getNome = $nome;
        $this->getQuantidade = $quantidade;
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->preco = $preco;
    }
    static public function setNome(string $nome): string
    {
       return self::$nome = $nome;
    }

    public function setPreco(): string
    {
        return $this->preco;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    abstract public function ajustarPreco(): float;

}