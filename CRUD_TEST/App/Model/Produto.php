<?php

namespace App\Model;

class Produto{
    private $id;
    private $nome;
    private $desc;

    


    // GET e SET

   
    public function getNome()
    {
        return $this->nome;
    }
 
    public function setNome($nome)
    {
        $this->nome = $nome;

 
    }
 
    public function getDesc()
    {
        return $this->desc;
    }
 
    public function setDesc($desc)
    {
        $this->desc = $desc;

      
    }

  
    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;

      
    }
}

