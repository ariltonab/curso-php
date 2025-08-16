<?php

function verificaParOuImpar($numero){
    if($numero % 2 == 0){
        echo "Esse número é par.";
    }else{
        echo "Esse número é ímpar.";
    }
}

$num = readline("Informe um número: ");

verificaParOuImpar($num);

?>