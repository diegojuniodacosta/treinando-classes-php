<?php

namespace Diego\DDD\Dominio;

interface CadastraPessoa
{
    public function executar(string $cpf, string $nome);
}