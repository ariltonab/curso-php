<?php

$num = 0;
$cont = 0;
$soma = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 2 != 0 && $cont < 11){
        $num = $i;
        $cont++;
        $soma = $soma + $num;
    }
}
echo $soma.PHP_EOL;
//acredito que esteja certo...
?>