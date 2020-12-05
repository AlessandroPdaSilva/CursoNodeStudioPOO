<?php

class Pessoa{

    

    function __set($nome, $value)// __set global para classe
    {
        $this-> nome = $value;
    }

    function __get($nome)// __get global para classe
    {
        return $this->nome;
    }

    function __toString()// __toString global para classe
    {
        return "tentei imprimir a classe";
    }

    function __invoke()// __invoke global para classe
    {
        return "objeto virou uma função ";
    }

}

$pessoa = new Pessoa();
$pessoa-> eu = 'Joana';// set global
echo $pessoa-> eu."<br>";// get global
echo $pessoa ."<br>";// toString global
echo $pessoa();// invoke global



