<?php

namespace Diego\DDD\Infra;

use Diego\DDD\Dominio\PessoaRepository;
use Diego\DDD\Dominio\Pessoa;
use Exception;

class PessoaRepositoryEmMemoria implements PessoaRepository
{
    private array $pessoasData = [];

    public function __construct()
    {
        return $this->pessoasData = [
            new Pessoa('11111111111', 'lucas'),
            new Pessoa('22222222222', 'diego'),
            new Pessoa('33333333333', 'paulo'),
            new Pessoa('44444444444', 'rafa'),
        ];
    }

    public function RecuperarTodos() : array{
        return $this->pessoasData;
    }

    /**
     * @throws Exception
     */
    public function recuperarPorCpf(string $cpf) : Pessoa
    {
        foreach ($this->pessoasData as $pessoa) {
            if ($pessoa->getCpf() === $cpf){
                return $pessoa;
            }
        }

        throw new Exception('Não foi encontrado!');
    }

    public function criar(Pessoa $pessoa) : void{
        $this->pessoasData[] = $pessoa;
    }

    public function countPessoas(): int
    {
        return count($this->pessoasData);
    }

    /**
     * @return array
     */
    public function getPessoasData(): array
    {
        return $this->pessoasData;
    }
}