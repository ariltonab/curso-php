<?php

$nome = readline('Informe o seu nome: ');
$idade = readline('Informe a sua idade: ');

if($idade <= 10){
    echo " $nome você é uma crainça, pois tem $idade anos";
}else if($idade <= 14){ 
    echo "$nome você é um adolescentem, pois tem $idade anos";
}else if($idade <= 18){
    echo "$nome você é um jovem, pois tem $idade anos";
}else if($idade > 18){
    echo "$nome você é um adulto, pois tem $idade anos";
}else{
    echo "Idade inválida";
} 







?> 