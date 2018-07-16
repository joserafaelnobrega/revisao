<?php


class Cliente{

    protected $nome;
    protected $idade;
    protected $cpf; 
    protected $sexo;
    protected $cep;


    

            function setNome($nome){
                $this->nome = $nome;
            }

            function getNome(){
                return $this->nome;
            }

            function setIdade($idade){
                $this->idade = $idade;
            }

            function getIdade(){
                return $this->idade;
            }

            function setCpf($cpf){
                $this->cpf  =  $cpf;
            }

            function getCpf(){
                return $this->cpf;
            }

            function setSexo(){
                $this->sexo = $sexo;

            }

            function getSexo(){
                return $this->sexo;
            }

            function setCep(){
                $this->cep = $cep;
            }

            function getCep(){
                return $this->cep;
            }






}




?>