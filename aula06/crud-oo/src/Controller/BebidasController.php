<?php
declare(strict_types = 1);
class BebidasController{
    public function list():void 
    {
        $query ="SELECT * FROM tb_bebidas;";

        $pdo = DatabaseConnection::open();
        $result = $pdo->query($query);
        $result->execute();

        $bebidas = $result->fetchAll(PDO::FETCH_OBJ);

        render('bebidas/listar',[
            'bebidas'=>$bebidas,
        ]);
    }

    public function add():void 
    {
        if(true === empty($_POST)){
            render('bebidas/add');
            return;
        }        
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];

            $foto = $_FILES['foto'];
            $caminhoImg ="img/".$foto["name"];
            move_uploaded_file($foto["tmp_name"], $caminhoImg);      

            $query = "INSERT INTO tb_bebidas(titulo,descricao,preco,quantidade,foto) VALUES ('$titulo','$descricao','$preco','$quantidade','$caminhoImg');";    
            $pdo = DatabaseConnection::open();
            $pdo->query($query);

        WebNotification::add('Bebida Adicionada');    
        header("Refresh:1;url=/bebidas/listar"); 
        //header("location:/bebidas/listar");  
    }

    public function del():void 
    {
        $id = $_GET['id'];

        $query = "DELETE FROM tb_bebidas WHERE id=('{$id}')";
        $pdo = DatabaseConnection::open();
        $pdo->query($query);
        
        WebNotification::del('Bebida Excluida');
        header("Refresh:1;url=/bebidas/listar");         
    }

    public function edit():void 
    {
        $id = $_GET['id'];
            $query = "SELECT * FROM tb_bebidas WHERE id= $id;";
            $pdo =DatabaseConnection::open();
            $result= $pdo->query($query);
            $result->execute();
                $bebidaParaEditar = $result->fetchAll(PDO::FETCH_OBJ);
                render('bebidas/form_edit',[
                    'bebidaParaEditar'=>$bebidaParaEditar,
        ]);

        if(!empty($_POST)){
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade = $_POST['quantidade'];

                $query = "UPDATE tb_bebidas SET titulo='$titulo',descricao='$descricao',preco='$preco',quantidade='$quantidade' WHERE id='$id';";
                $pdo = DatabaseConnection::open();
                $pdo->query($query);
                WebNotification::edit('BeBida Editada'); 
                header("Refresh:1;url=/categorias/listar");
                //header("location:/categorias/listar");  
        }
    }
}