<?php

namespace Diego\DDD\Aplicacao;

use Diego\DDD\Dominio\ExecutaCadastroPessoa;
use Diego\DDD\Dominio\Pessoa;
use Diego\DDD\Dominio\PessoaRepository;
use Exception;

class CadastrarPessoa implements ExecutaCadastroPessoa
{
    private PessoaRepository $pessoaRepository;

    public function __construct(PessoaRepository $pessoaRepository)
    {
        $this->pessoaRepository = $pessoaRepository;
    }

    /**
     * @throws Exception
     */
    public function executar(string $cpf, string $nome) : void
    {
        $pessoa = new Pessoa($cpf, $nome);
        $this->pessoaRepository->Criar($pessoa);
    }
}