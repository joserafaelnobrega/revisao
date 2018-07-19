<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaAcao.class.php';
require_once 'classes/BancoDB.class.php';
?>

<?php

$rafael = new Cliente();
$rafael->setNome('Hudson');
$rafael->setEmail('hudson@gmail.com');
$rafael->setCpf('1565465454');

$contaRafa = new ContaCorrente();
$contaRafa->setCliente($rafael);
$contaRafa->setAgencia('89899');
$contaRafa->setNumero('54564');
$contaRafa->setSaldo(500.0);

$banco = new BancoDB();
//$banco->salva($contaRafa);
?>
<pre><?=var_dump($banco->listaTodas());?></pre>

