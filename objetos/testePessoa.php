<?php

require_once 'classes/Pessoa.class.php';

$pessoa = new Pessoa('weskley','M',36);

echo " Nome:{$pessoa->getNome()},Idade: {$pessoa->getIdade()}, Sexo: {$pessoa->getSexo()}";

?>