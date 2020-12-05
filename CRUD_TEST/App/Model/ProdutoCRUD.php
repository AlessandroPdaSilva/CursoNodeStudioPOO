<?php

namespace App\Model;


class ProdutoCRUD{

    public function create(Produto $p){

        $sql = "INSERT INTO produtos (nome,descricao) VALUES (?,?)";// comando
        $stmt = Conexao::getConexao() -> prepare($sql);// conecta
        $stmt-> bindValue(1,$p-> getNome() );
        $stmt-> bindValue(2,$p-> getDesc() );

        $stmt-> execute();
    }

    public function read(){
        
        $sql = "SELECT * FROM produtos";// comando
        $stmt = Conexao::getConexao() -> prepare($sql);// conecta
        $stmt-> execute();
        
        if( $stmt-> rowCount() > 0){
            
            $resultado = $stmt-> fetchAll(\PDO::FETCH_ASSOC);// vira array
            return $resultado;
        }else{

            return [];

        }

        

        
    }
    
    public function update(Produto $p){
        
        $sql = "UPDATE produtos SET nome = ?, descricao = ? WHERE id = ? ";
        $stmt = Conexao::getConexao() -> prepare($sql);
        $stmt-> bindValue(1,$p-> getNome() );
        $stmt-> bindValue(2,$p-> getDesc() );
        $stmt-> bindValue(3,$p-> getId() );

        $stmt-> execute();
    }
    
    public function delete($id){
        
        $sql = "DELETE FROM produtos WHERE id = ?";
        $stmt = Conexao::getConexao() -> prepare($sql);
        $stmt-> bindValue(1,$id);

        $stmt-> execute();

    }

}

