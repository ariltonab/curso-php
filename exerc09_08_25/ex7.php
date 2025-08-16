<?php

$linha = 5;

for ($i = 1; $i <= $linha; $i++){ //i vai até 5 no caso
    for ($j = 1; $j <= $i; $j++){ //p cada 'i externo', 
        //esse for vai ser executado por completo
        echo "*";
    }
    echo "\n";
}

?>