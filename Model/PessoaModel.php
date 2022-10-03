<?php

namespace App\Model;

use App\DAO\DAO;
use App\Dao\PessoaDao;

class PessoaModel 
{
    
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public $rows;


   
    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

       
        if($this->id == null) 
        {
           
            $dao->insert($this);
        } else {
           
        }
    }
 
    public function getAllRows()

     {
        $dao = new PessoaDao();

        $this->rows = $dao->select();
     }

     public function getById(int $id)

     {
        $dao = new PessoaDao();
        $obj = $dao->selectById($id); 
        return ($obj) ? $obj : new PessoaModel();
     }

     public function delete(int $id)

     {
        $dao = new PessoaDao();

        $dao->delete($id);
     }
     
}