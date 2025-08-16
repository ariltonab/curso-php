<?php
$notMed = readline("Informe a sua nota média: ");
$numfaltas = readline("Informe o seu número de faltas: ");

if($notMed > 8 && $numfaltas < 15){
    echo "Aluno elegível para a bolsa de estudos";
}

?>