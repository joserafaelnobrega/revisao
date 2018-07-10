<?php

class  Lampada  {

   private $estado;
   private $potencia;
   private $imgLigada;
   private $imgDesliga;
  
   function __construct($imgDesliga, $imgLigada){
       $this->estado  = false;
       $this->setPotencia($potencia);//aqui
       $this->imgDesliga = $desligada;
       $this->imgLigada = $ligada;
   }

   function setPotencia($potencia){
       if($potencia >=0){
           $this->potencia = $potencia;
       }else{
           $this->potencia =0;
       }
   }

   function getPotencia(){
       return $this->potencia;
   }


   function getEstado(){
       return $this->estado;
   }

   function getImagem(){
       if($this->estado){
           return $this->imgLigada;
       }else{
           return $this->imgDesliga;
       }
   }

   function liga(){
    $this->estado = true;
   }

   function desliga(){
    $this->estado = false;
   }

   function __toString(){
       return "Lampada {potencia={$this->potencia},estado={$this->estado}}";
   }
}