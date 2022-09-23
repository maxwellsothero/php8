<?php

declare(strict_types =1);
class CategoryController
{   
    public function list():void 
    {   
           $query = "SELECT * FROM tb_category;"; 

           $pdo = DatabaseConnection::open();
           $result = $pdo->query($query);
           $result->execute();

           $categories = $result->fetchAll(PDO::FETCH_OBJ);

           //var_dump($categories);

       render('categorias/list',[
        'categories' =>$categories,
       ]);
    }

    public function add():void
    {

        if(true === empty($_POST)){
            render('categorias/add');
            return;
        }
        $name = $_POST['name'];
        $query = "INSERT INTO tb_category(name) VALUES ('{$name}')";
        $pdo = DatabaseConnection::open();
        $pdo->query($query);

        WebNotification::add('Categoria Adicionada');       
    }

    public function del():void 
    {
        
    }
}