<?php

$tempAmb = readline("Informe a temperatura ambiente: ");
$periodo = readline("Informe o período do dia (matutino/noturno): ");

if($tempAmb > 27 && $periodo == 'matutino'){
    echo "Ar-condiciionado foi ligado";
}

?>