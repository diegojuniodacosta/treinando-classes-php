<?php

namespace Diego\DDD\Aplicacao;

use Diego\DDD\Dominio\CadastraPessoa;
use Diego\DDD\Dominio\Pessoa;
use Diego\DDD\Dominio\IPessoaRepository;
use Exception;

class CadastrarPessoa implements CadastraPessoa
{
    private IPessoaRepository $pessoaRepository;

    public function __construct(IPessoaRepository $pessoaRepository)
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