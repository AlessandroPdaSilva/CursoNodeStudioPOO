<?php

class Pessoa{

    function atribuiNome($nome){
        echo " Nome : $nome";
    }

}


class Exibe{

    public $pessoa;
    public $nome;

    function __construct($nome)
    {
        $this-> pessoa = new Pessoa();
        $this-> nome = $nome;
    }

    function exibeNome(){

        echo $this-> pessoa->atribuiNome($this-> nome);

    }


}


$exibe = new Exibe('joao');
$exibe-> exibeNome();