<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="js/bootstrap.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   
    <title>Sistema de Controle</title>
</head>
<body class="container mt-5">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/cad-cliente">Cliente</a></li>
            <li><a class="dropdown-item" href="/cad-produtos">Rastreador</a></li>
            <li><a class="dropdown-item" href="/cad-veiculo">Veículo</a></li>
            <li><a class="dropdown-item" href="/cad-estoque">Estoque</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/listar-clientes">Clientes</a></li>
            <li><a class="dropdown-item" href="/listar-produtos">Rastreadores</a></li>
            <li><a class="dropdown-item" href="/listar-veiculo">Veiculos</a></li>
            <li><a class="dropdown-item" href="/listar-estoque">Estoque-Produtos</a></li>
            <li><a class="dropdown-item" href="/listar-pedidos">Rastreadores Vinculados</a></li>
          </ul>
        </li>    
               
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/realiza-pedido">Vincular Rastreador</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

    <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
         <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

        <script>
                $(document).ready( function () {
                 $('#table_id').DataTable({
                  "language": {
                    url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
                   },
                   dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]   
               });
            });

          
        </script>
</body>
</html>

<?php 
    $url =explode('?',$_SERVER['REQUEST_URI']);

    match($url[0]){
        '/' => include  'paginas/inicio.phtml',
        '/cad-cliente' => include 'paginas/cadClientes.phtml',
        '/editar-cliente' => include 'paginas/editarCliente.phtml',
        '/excluir-cliente' => include 'paginas/excluirCliente.phtml',
        '/listar-clientes' => include 'paginas/listarCliente.phtml',

        '/cad-produtos' => include 'paginas/cadProdutos.phtml',
        '/editar-produto' => include 'paginas/editarProduto.phtml',
        '/excluir-produto' => include 'paginas/excluirProduto.phtml',
        '/listar-produtos' => include 'paginas/listarProdutos.phtml',

        '/cad-estoque' => include 'paginas/cadEstoque.phtml',
        '/editar-estoque' => include 'paginas/editarEstoque.phtml',
        '/excluir-estoque' => include 'paginas/excluirEstoque.phtml',
        '/listar-estoque' => include 'paginas/listarEstoque.phtml',

        '/cad-veiculo' => include 'paginas/cadVeiculo.phtml',
        '/editar-veiculo' => include 'paginas/editarVeiculo.phtml',
        '/excluir-veiculo' => include 'paginas/excluirVeiculo.phtml',
        '/listar-veiculo' => include 'paginas/listarVeiculos.phtml',         
 
        '/listar-pedidos' => include 'paginas/listarPedidos.phtml',
        '/realiza-pedido' => include 'paginas/realizarPedido.phtml',
        '/excluir-pedido' => include 'paginas/excluirPedido.phtml',
        '/editar-pedido' => include 'paginas/editarPedido.phtml',
                  

        default => include 'paginas/error404.phtml',
    }

?>