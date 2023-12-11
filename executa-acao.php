<?php

// Vamos chamar o autoload para incluir os arquivos necessários
require_once 'autoload.php';

// Vamos informar as classes que iremos utilizar
use Diego\Models\Torneira;
use Diego\Services\PrecoCalculado;
use Diego\Services\Validador;


// Vamos criar um novo objeto a partir da classe Itens

$existe = new Validador();

$precomudou = new PrecoCalculado();

Torneira::setNome('Pinga pinga');

$torneira = new Torneira('1', 'Vazando', '0', 'Deca', 'Com Filtro', '51.0');

echo $torneira . PHP_EOL;

$quantidadeTorneira = $torneira->getQuantidade();

echo $quantidadeTorneira . PHP_EOL;

$existe->existeQuantidade($torneira, $quantidadeTorneira);

echo PHP_EOL;

echo $torneira->getPreco();

$precoComAjuste = $torneira->ajustarPreco();

echo PHP_EOL;

$precomudou->alteraPreco($torneira, $precoComAjuste);







