<?php

use Diego\DDD\Infra\PessoaRepositoryEmMemoria;
use Diego\DDD\Aplicacao\CadastrarPessoa;


require_once '../../vendor/autoload.php';

$pessoaRepositoryInfraestrutura = new PessoaRepositoryEmMemoria();
$cadastrarPessoaUseCaseAplicacao = new CadastrarPessoa($pessoaRepositoryInfraestrutura);

try{
    $cadastrarPessoaUseCaseAplicacao->executar('15155151515', 'Lucas');
    echo 'Executado com sucesso!';
} catch (Exception $ex){
    echo $ex->getMessage();
}