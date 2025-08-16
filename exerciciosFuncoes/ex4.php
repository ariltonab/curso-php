<?php

function mostrarTabuada($num){
    for($i = 1; $i <= 10; $i++){
        echo "$num X $i = " . ($i * $num).PHP_EOL;
    }

}

mostrarTabuada(7);

?>