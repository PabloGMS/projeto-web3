<?php


class CategoriasController 
{
    
    public static function index() 
    {
        include 'Model/CategoriasModel.php';
        $model = new CategoriasModel();
        $model->getAllRows();

        include 'View/modules/Categorias/ListaCategoriass.php';
    }

   
    public static function form()
    {
        include 'View/modules/Categorias/FormCategorias.php';
    }

   
     
    public static function save() {

        include 'Model/CategoriasModel.php';

        $categorias = new CategoriasModel();
        $categorias->alimentos = $_POST['alimentos'];
        $categorias->bebidas = $_POST['bebidas'];
       
       
        $categorias->save();  

        header("Location: /categorias"); 
    }
}