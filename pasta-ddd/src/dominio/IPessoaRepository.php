<?php
namespace Diego\DDD\Dominio;

use Diego\DDD\Dominio\Pessoa;

interface IPessoaRepository{
    public function RecuperarTodos() : array;
    public function RecuperarPorCpf(string $cpf) : Pessoa;
    public function Criar(Pessoa $pessoa) : void;
}