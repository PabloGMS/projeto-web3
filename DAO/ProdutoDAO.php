<?php

class ProdutoDAO
{
    
    private $conexao;


   
    function __construct() 
    {
         
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(ProdutoModel $model) 
    {
        
        $sql = "INSERT INTO Produto 
                (codigo, produto, descricao, data_cadastro, valor) 
                VALUES (?, ?, ?, ?, ? )";
        
       
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->codigo);
        $stmt->bindValue(2, $model->produto);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->data_cadastro);
        $stmt->bindValue(5, $model->valor);
        $stmt->execute();      
    }
    public function update(ProdutoModel $model)
    
    {
        $sql = "UPDATE produto SET codigo=?, produto=?, descricao=?, data_cadastro=?, valor=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->codigo);
        $stmt->bindValue(2, $model->produto);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->data_cadastro);
        $stmt->bindValue(5, $model->valor);
        $stmt->bindValue(6, $model->id);
        $stmt->execute();
    }
    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_CLASS); 
    }
    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel");
    }
   
    
        public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    
    } 
}