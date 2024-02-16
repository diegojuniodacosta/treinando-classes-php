<?php

namespace Diego\DDD\infra;

use Diego\DDD\Dominio\IPessoaRepository;
use Diego\DDD\Dominio\Pessoa;
use Exception;

class PessoaRepository implements IPessoaRepository
{
    private array $pessoasData = [];

    public function __construct()
    {
        $pessoasData = [
            new Pessoa('11111111111','lucas'),
            new Pessoa('22222222222','diego'),
            new Pessoa('33333333333','paulo' ),
            new Pessoa('44444444444','rafa' ),
        ];
    }

    public function RecuperarTodos() : array{
        return $this->pessoasData;
    }

    /**
     * @throws Exception
     */
    public function RecuperarPorCpf(string $cpf) : Pessoa
    {
        foreach ($this->pessoasData as $pessoa) {
            if ($pessoa->cpf === $cpf){
                return $pessoa;
            }
        }

        throw new Exception('Não foi encontrado!');
    }

    public function Criar(Pessoa $pessoa) : void{
        $this->pessoasData[] = $pessoa;
    }
}