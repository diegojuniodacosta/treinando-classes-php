<?php
namespace Diego\DDD\dominio;

use Diego\DDD\Dominio\Pessoa;

interface PessoaRepository{
    public function recuperarTodos() : array;
    public function recuperarPorCpf(string $cpf) : Pessoa;
    public function criar(Pessoa $pessoa) : void;
}