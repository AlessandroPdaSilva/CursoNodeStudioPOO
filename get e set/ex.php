<?php

class NomeDaClasse{
    private $nome;
    protected $idade;

    public function __get($val){
       return $this->$val;
    }

   public function __set($attr, $val){
      $this->$attr = $val;
   }
}

$a = new NomeDaClasse();
$a->__set('nome', 'Fulano');
$a->__set('idade', 18);

var_dump($a);