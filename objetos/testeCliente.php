<?php

require_once 'classes/Pessoa.class.php';
require_once 'classes/Cliente.class.php';

global $ola;

$cliente =new Cliente();

$cliente->setNome('luan');
$cliente->setCpf('123.123.123-12');
$cliente->setIdade(23);
$cliente->setSexo('m');

echo $cliente->getSexo();

var_dump($ola);




?>