<?php

function welcome(string $nome):string
{
    $x =$nome ?? 'Anonimo';
    return "Bem Vindo {$x} <br>";
}


//quando utilizamos  o ? e atribuimos null, a função se não tiver parametro seta null
// function welcome(?string $nome = null){
//     echo "Bem Vindo {$nome} <br>";
// }

function soma( float $n1, float $n2):float
{
    echo $n1 + $n2;
    echo '<br>';
}

// //forma de fazer 01
// function media (float $n1,float $n2,float $n3,float $n4){
//     echo ($n1 + $n2 + $n3 +$n4)/4;
// }

 function media(float...$numeros){

    //     $soma = 0;
    //     $qtd = 0;
    //     foreach($numeros as $cadanumero){
    //         $soma += $cadaNumero;
    //         $qtd++;
    // }
    // echo $soma / $qtd;

    echo array_sum($numeros)/count($numeros);

 }



