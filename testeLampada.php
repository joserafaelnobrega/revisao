<?php

$oq = $_REQUEST();

if($oq == "ligar"){
   
}

require_once 'Lampada.php';
$lampada =  new Lampada();

$lampada->setPotencia(50);

$lampada->liga();

