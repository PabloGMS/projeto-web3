<?php


class ProdutoController 
{
    
    public static function index() 
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model->getAllRows();

        include 'View/modules/Produto/ListaProdutos.php';
    }

   
    public static function form()
    {
        include 'View/modules/Produto/FormProduto.php';
    }

   
     
    public static function save() {

        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();
        $produto->codigo = $_POST['codigo'];
        $produto->produto = $_POST['produto'];
        $produto->descricao = $_POST['descricao'];
        $produto->data = $_POST['data'];
        $produto->valor = $_POST['valor'];
       
        $produto->save();  

        header("Location: /produto"); 
    }
}