<?php 

class Cliente extends Pessoa{

private $cpf;
private $cartao;


function setCpf($cpf){
    $this->cpf = $cpf;

}

function getCpf(){
 return $this->cpf;
}


function setCartao($cartao){
    $this->cartao = $cartao;

}

function getCartao(){
    return $this->cartao;


}


}


?>