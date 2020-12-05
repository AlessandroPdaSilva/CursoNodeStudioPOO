<?php
// ******* MAIN ********

require_once "vendor/autoload.php";

use App\Model\Produto;
use App\Model\ProdutoCRUD;

// produto
$produto = new Produto();
$produto-> setId(3);
$produto-> setNome("darksouls");
$produto-> setDesc("pc");


// crud
$crud = new ProdutoCRUD();
$crud-> delete(6);
$crud-> read();

foreach($crud-> read() as $produto){
    echo $produto["nome"]." - ".$produto["descricao"]."<br>";

}


