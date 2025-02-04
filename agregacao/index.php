<?php
// AGREGAÇÃO 
    // NA AGREGAÇÃO, UMA CLASSE PRECISA DA OUTRA PARA EXECUTAR SUA AÇÃO, OU SEJA, UMA CLASSE UTILIZA OUTRA PARTE DE SI

    class Produtos {

        public $nome;
        public $valor;

        function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }

    }

    class Carrinho {

        public $produtos;

        public function adiciona(Produtos $produto) {
            $this->produtos[] = $produto;
        }

        public function exibe() {
            
            foreach ($this->produtos as $produto) {
                echo $produto->nome ."<br>";
                echo $produto->valor ."<hr>";
            }

        }

    }

    // CRIANDO OS OBJETOS PRODUTOS
    $produto1 = new Produtos("Notebook", "1500");
    $produto2 = new Produtos("Mouse", "100");

    // CRIANDO O OBJETO CARRINO
    $carrinho = new Carrinho();
    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    $carrinho->exibe();

?>