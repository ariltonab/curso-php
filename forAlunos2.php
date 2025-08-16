<?php

$alunos = ["Arilton", "Fernando", "Alef", "Igor", "Gustavo Henrique", "Gustavo Costalonga", "Luan", "Kauan"];

for($i = 0; $i < count($alunos); $i++){ //esse count vai 'contar' quantos elementos tem no array, dessa forma se eu retirar ou 
// adicionar alguém na array não tenho que vir alterar o número que indica até onde vai 
    echo $alunos[$i].PHP_EOL; //esse [$i] serve para mostrar tudo que está dentro do array... 
    // pq se eu colocasse só um nº (exemplo: 1), iria mostrar o elemento que se refere a aquele íniice, nesse caso seria "Fernando"
}

?>