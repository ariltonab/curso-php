<?php
$nt1 = readline("Informe a nota 1 : ");
$nt2 = readline("Informe a nota 2 : ");
$nt3 = readline("Informe a nota 3 : ");
$frequencia = readline("Sua frequência foi de quantos por cento (%)? "); // a função 'readline' 

$media = ($nt1 + $nt2 + $nt3) / 3; //média aritmética

if($media >= 7 && $frequencia >= 75){
    echo "Você foi aprovado!";
}else{
    echo "Você não foi aprovado!";
}


?>



