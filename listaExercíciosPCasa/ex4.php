<?php
$idade = readline("Você tem quantos anos de idade? ");
$tempCnh = readline("Há quantos anos você tem CNH? ");

if($idade > 25 && $tempCnh >= 3){
    echo "Você pode alugar um carro de luxo";
}

?>