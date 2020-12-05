<?php

class pessoa{

    public $idade;

    public function __clone()
    {
        " isso e um clone : ";
    }

}

//$pessoa1 = new pessoa();
$pessoa1 -> idade = 15;

//$pessoa2 = new pessoa();
$pessoa2 = clone $pessoa1;
$pessoa2 -> idade = 35;

echo $pessoa2->idade;