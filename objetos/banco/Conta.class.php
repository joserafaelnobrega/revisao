<?php

class Conta extends Cliente{

    protected $numero_conta;
    protected $numero_cartao;
    protected $senha;

   

    function setNumero_conta(){
        $this->numero_conta = $numero_conta;
    }

    function getNumero_conta(){
        return $this->numero_conta;
    }

    function setNumero_cartao(){
        $this->numero_cartao = $numero_cartao;
    }

    function getNumero_conta(){
        return $this->numero_cartao;
    } 

    function setSenha(){
        $this->senha = $senha;
        
    }

    function getSenha(){
        return $this->senha;
    }


}



?>