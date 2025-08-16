<?php

function Somar(){
    $num1 = readline("Informe o número 1: ");
    $num2 = readline("Informe o número 2: ");
    $soma = $num1 + $num2;
    echo "O valor da soma é: $soma";
    //echo "O valor da soma é: " . ($num1 + $num2); //Assim não precisaria da variável $soma
}

Somar();

?>