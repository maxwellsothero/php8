<?php
ini_set('display_errors',1);

$nome = $_POST['nome'];
$senha = password_hash($_POST['senha'],PASSWORD_ARGON2I);

include

$arquivo = fopen('aula01/exercicios/usuarios.csv','a+');
fwrite($arquivo,"{$nome};{$senha}".PHP_EOL);

fclose($arquivo);


