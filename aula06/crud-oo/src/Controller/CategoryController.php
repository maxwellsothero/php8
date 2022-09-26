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
        header("location:/categorias/listar");  
    }

    public function del():void 
    {
            $id = $_GET['id'];

            $query = "DELETE FROM tb_category WHERE id = ('{$id}')";
            $pdo = DatabaseConnection::open();
            $pdo->query($query);      
            
            WebNotification::add('Bebida Excluida');
           
           header("location:/categorias/listar");      
    }

    public function edit():void
    {
        $id = $_GET['id'];

                $query = "SELECT * FROM tb_category WHERE id = $id;";
                $pdo = DatabaseConnection::open();        
                $result = $pdo->query($query);
                $result->execute();

        $categories = $result->fetchAll(PDO::FETCH_OBJ);
        
        render('categorias/form_edit',[
            'categories' =>$categories,
           ]);
                  if(!empty($_POST)){
                    
                    $name = $_POST['name'];
                    
                $query = "UPDATE tb_category SET name=('{$name}') WHERE id=$id;";
                $pdo = DatabaseConnection::open();
                $pdo->query($query);
                WebNotification::add('Categoria Adicionada');     
                header("location:/categorias/listar");    
                }
   }
}