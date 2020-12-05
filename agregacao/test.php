<?php

class Produto{// produto

    public $nome;
    public $valor;

    function __construct($nome,$valor)
    {
        $this-> nome = $nome;
        $this-> valor = $valor;
    }


}


class Carrinho { // carrinho

    public $produtos;

    public function adicionar(Produto $produto){
        $this-> produtos[] = $produto;
    }


    public function exibir(){
    	foreach ($this-> produtos as $produto) {
            echo $produto-> nome." : ";
            echo $produto -> valor ."<br>";
    	}
    }

}

$produto1 = new Produto('the last of us',200);
$produto2 = new Produto('god of war 3',100);

$carrinho = new Carrinho();
$carrinho-> adicionar($produto1);
$carrinho-> adicionar($produto2);

$carrinho-> exibir();

