<?php

class newsletter{
    
    
    public function cadastrarEmail($email){

        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            throw new Exception("email invalido",1);
        }else {
            echo "email valido";
        }


    }


}

$newsletter = new newsletter();
try{
    $newsletter-> cadastrarEmail("blablabal@");
}catch(Exception $e){
    echo "Mensagem:".$e->getMessage()."<br>";
    echo "Codigo:".$e->getCode()."<br>";
    echo "linha:".$e->getLine()."<br>";
    echo "arquivo:".$e->getFile()."<br>";
}

