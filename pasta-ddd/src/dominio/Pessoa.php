<?php

namespace Diego\DDD\dominio;

use Exception;

class Pessoa
{
    private string $nome;
    private string $cpf;

    /**
     * @throws Exception
     */
    public function __construct(string $cpf, string $nome)
    {
        $this->nome = $nome;
        $this->setCpf($cpf);
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @throws Exception
     */
    public function setCpf(string $cpf) : void
    {
        if (strlen($cpf) == 11){
            $this->cpf = $cpf;
        }
        else{
            throw new Exception('O CPF do usuário é inválido!');
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function __toString(): string
    {
        $s = $this->nome;
        return sprintf("Pessoa: %s, CPF: %s", (string) $this->nome, (string) $this->cpf);
    }

}