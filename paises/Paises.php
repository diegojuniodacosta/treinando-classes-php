<?php

class Paises
{
    private string $nome;
    private string $capital;
    private string $tamanho;
    private string $paisesVizinhos;

    /**
     * @param string $nome
     * @param string $capital
     * @param string $tamanho
     */
    public function __construct(string $nome, string $capital, string $tamanho)
    {
        $this->nome = $nome;
        $this->capital = $capital;
        $this->tamanho = $tamanho;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCapital(): string
    {
        return $this->capital;
    }

    public function getTamanho(): string
    {
        return $this->tamanho;
    }

    public function comparaPais($paisAtual,  $paisComparacao): void
    {
        $mesmoNome = $paisAtual->nome != $paisComparacao->nome;
        $mesmaCapital = $paisAtual->capital != $paisComparacao->capital;
        if ($mesmoNome || $mesmaCapital){
            echo "Países Diferentes!";
            } else{
            echo "É o mesmo País!";
    }
    }


}

$novoPais = new Paises('Brasil', 'Brasilia', '500 km');

$novoPais2 = new Paises('Brasil', 'Brasilia', '1000 km');

$teste = $novoPais->comparaPais($novoPais, $novoPais2);
