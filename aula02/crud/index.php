<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Gerenciamento de Bebidas</title>
</head>
<body class="container">
        <nav class="mt-5">
            <a href="/" class="btn btn-outline-dark">Inicio</a>
            <a href="/nova-bebida" class="btn btn-outline-dark">Nova Bebida</a>
            <a href="/listar-bebidas" class="btn btn-outline-dark">Listar Bebidas</a>
        </nav>
    <hr>  
    <?php
        //var_dump($_SERVER);
        $url = $_SERVER['REQUEST_URI'];
       match($url){
            '/' => include 'paginas/home.phtml',
            '/nova-bebida' => include 'paginas/add.phtml',
            '/listar-bebidas' => include 'paginas/listar.phtml',
            default => include 'paginas/erro404.phtml',
       }

    ?>
   
    
</body>
</html>