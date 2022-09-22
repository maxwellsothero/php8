<?php
$desconto = 10;

function addDesconto(float $valor){
    global $desconto ;
    return $valor * ($desconto/100);
}

$addDesconto = function(float $valor) use ($desconto){
    return $valor * ($desconto/100);
};

echo addDesconto(4569), '<br>';

echo $addDesconto(8798);