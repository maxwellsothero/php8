<?php

$arquivo = file('aula01/exercicios/usuarios.csv');

echo '<ul>';
foreach ($arquivo as $linha){
    $partes = explode(';',$linha);

    echo "<li>{$partes[0]}</li>";

}
echo '</ul>';