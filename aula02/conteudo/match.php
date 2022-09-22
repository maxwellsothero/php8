<?php
// só funciona a partir do PHP 8.0
$mes = 2;

echo match($mes){
    1 => 'janeiro',
    2 => 'Fevereiro',
    default => 'Mês Invalidos'
};