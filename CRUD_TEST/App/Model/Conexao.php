<?php

namespace App\Model;

class Conexao{

    private static $connect;

    public static function getConexao(){

        if( !isset(self::$connect) ){
            self::$connect = new \PDO("mysql:host=localhost;dbname=pdo","root","");
            return self::$connect;
        }else{
            return self::$connect;
        }
        
                

    }


}
