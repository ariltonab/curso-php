<?php

$nivel = readline('Informe o seu nível como jogador (de 1 a 5): ');
$salario = 15000;

if($nivel == 5){
    echo "Você ganha R$15.000 reais de salário, logo terá um bônus!".PHP_EOL;
    $salario = $salario * 1.15;
   
}else{
    echo "Você não ganha R$15.000";
}

echo "O salário será de R$ $salario";

?>