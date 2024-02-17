<?php

namespace Diego\DDD\dominio;

interface ExecutaCadastroPessoa
{
    public function executar(string $cpf, string $nome);
}