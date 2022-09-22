<?php
ini_set('display_errors',1);

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$foto = $_POST['foto'];

include

$arquivo = fopen('../../bebidas.csv','a+');
fwrite($arquivo,"{$titulo};{$descricao};{$preco};{$quantidade};{$foto}".PHP_EOL);

fclose($arquivo);