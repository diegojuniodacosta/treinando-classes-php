<?php

namespace Diego\DDD\Testes;


use Diego\DDD\dominio\Pessoa;
use Diego\DDD\Infra\PessoaRepositoryEmMemoria;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testQuantidadeDePessoas()
    {
        $pessoaRepository = new PessoaRepositoryEmMemoria();
            $this->assertCount(4, $pessoaRepository->RecuperarTodos());
    }


    public function testCpfComMenosDeOnzeNumerosNaoDevePassar()
    {
        $this->expectException(\Exception::class);
        new Pessoa('111111111', 'Tião');
    }



    public function testVerificaNomeDasPessoas()
    {
        $pessoa = new PessoaRepositoryEmMemoria();
        $pessoaData = $pessoa->getPessoasData();

        $this->assertEquals('lucas', $pessoaData[0]->getNome());
        $this->assertEquals('11111111111', $pessoaData[0]->getCpf());

    }

    public function testEncontrarNomeNaLista()
    {
        $pessoa = new PessoaRepositoryEmMemoria();
        $pessoasData = $pessoa->getPessoasData();

        $nomeEsperado = 'diego';
        $cpfEsperado   = '22222222222';
        $encontrado    = false;

        foreach ($pessoasData as $pessoaData) {
            if ($pessoaData->getNome() === $nomeEsperado) {
                $this->assertEquals($cpfEsperado, $pessoaData->getCpf());
                $encontrado = true;
                break; // Encerra o loop assim que a pessoa é encontrada
            }
        }

        $this->assertTrue($encontrado, "Pessoa com nome $nomeEsperado não encontrada na lista.");
    }

}