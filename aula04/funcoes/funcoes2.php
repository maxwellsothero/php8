<?php
function addEstilo(string $nome): String
{
    return strtoupper($nome);
}

$alunos=[
    'Maria',
    'Chiquim',
    'Jose',
];
//1 forma
// foreach ($alunos as $key=> $cadaAluno){
//     $alunos[$key] = addEstilo($cadaAluno);     
// }
// var_dump($alunos);
//2 forma
$alunos = array_map('addEstilo',$alunos);
var_dump($alunos);

function addUnderline(string $nome):string 
{
    return "_{$nome}_";
}

// //1 forma de fazer
 $alunos = array_map('addUnderline', $alunos);
 var_dump($alunos);

//arrow function
$addUnderline =  fn(string $nome): string => "_{$nome}_";
echo $addUnderline('jose'); //_Jose_