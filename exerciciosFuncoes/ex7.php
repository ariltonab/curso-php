<?php



function obterMaior($a, $b){
    if($a > $b){
        echo "O primeiro número informado, é o maior.";
    }else{
        echo "O segundo número informado, é o maior.";
    }
}

$letraA = readline("Informe o 1º número: ");
$letraB = readline("Informe o 2º número: ");

obterMaior($letraA,$letraB);
?> 