<?php
$cursoForm = readline("Em que curso você tem formação? ");
$tempExp = readline("Quantos anos de experiência você tem? ");

if($cursoForm == 'Ciência da Computação' || $tempExp > 4){
    echo "Você está apto para a vaga";
}

?>