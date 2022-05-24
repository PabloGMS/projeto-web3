<?php

class CategoriasDAO
{
    
    private $conexao;


   
    function __construct() 
    {
         
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(CategoriasModel $model) 
    {
        
        $sql = "INSERT INTO Categorias 
                (alimentos, bebidas,) 
                VALUES (?, ? )";
        
       
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->alimentos);
        $stmt->bindValue(2, $model->bebidas);
       
        
       
        $stmt->execute();      
    }

    
    public function getAllRows()
    {
        
        $sql = "SELECT * FROM Categorias ";

       
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute(); 
        
        return $stmt->fetchAll(); 

    }
    public function delete(int $id)
    {
    $sql = "DELETE FROM categorias WHERE id = ? ";

    $stmt = $this->conexao->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    }
}