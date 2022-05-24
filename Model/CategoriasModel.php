<?php

class CategoriasModel
{
    
    public $id, $codigo, $categorias, $descricao;
    public $data, $valor;
   

    public $rows;


    
    public function save()
    {
        include 'DAO/CategoriasDAO.php';

        $dao = new CategoriasDAO();

        
        if($this->id == null) 
        {
            
            $dao->insert($this);
        } else {
            
        }
    }

    
    public function getAllRows()
    {
       
        include 'DAO/CategoriasDAO.php';

        
        $dao = new CategoriasDAO();

        $this->rows = $dao->getAllRows();
    }
}