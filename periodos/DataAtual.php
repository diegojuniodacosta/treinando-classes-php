<?php

class DataAtual
{
    public $data;
    public $hora;

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

}

//$horarioAtual = new DataAtual();

// echo date('d.m.Y');

$data = new DateTime();
var_dump($data);


$cidadesSulPais = [

    $capital1 = ['RS' => 'Porto Alegre'],

    $capital2 = ['SC' => 'Florianopolis'],

    $capital3 = ['PR' => 'Curitiba'],

    $cidade4  = ['SC' => 'Criciuma'],

    $cidade5  = ['PR' => 'Sao Jose Dos Pinhais'],

    $cidade6  = ['RS' => 'Andrelina']

];

foreach ($cidadesSulPais as $siglas => $cidades)
    foreach ($cidades as $capitais){
    echo $capitais . PHP_EOL;
}

var_dump($cidades);