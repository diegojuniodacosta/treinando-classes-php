<?php
require_once '../infra/PessoaRepository.php';
require_once 'CadastrarPessoa.php';
require_once '../dominio/CadastraPessoa.php';
require_once '../dominio/Pessoa.php';
require_once '../dominio/IPessoaRepository.php';

$pessoaRepositoryInfraestrutura = new \Diego\DDD\infra\PessoaRepository();
$cadastrarPessoaUseCaseAplicacao = new \Diego\DDD\Aplicacao\CadastrarPessoa($pessoaRepositoryInfraestrutura);
try{
    $cadastrarPessoaUseCaseAplicacao->executar('1515151515', 'Lucas');
    echo 'Executado com sucesso!';
} catch (Exception $ex){
    echo $ex->getMessage();
}