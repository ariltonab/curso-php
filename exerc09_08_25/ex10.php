<?php

$num = 1;
while($num <=50){
    echo $num.PHP_EOL;
    $num = $num + 2; //assim só pega os ímpares...
}

//tinha tentado assim:
/* $num = 0;
while($num % 2 != 0){
    echo $num;                  para comentar em bloco:
    $num = $num + 1;                shift + alt + a 
} */
?>