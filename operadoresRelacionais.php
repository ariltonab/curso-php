<?php
    $num1 = 5;
    $num2 = "2";
    $num3 = 8;

    var_dump($num1 == $num2); //bool (true)
    echo "<br>";
    var_dump($num1 === $num2); //bool (false). Esse "===" compara se o 5 e o "2" são do mesmo tipo (não são, 1º é int e o 2º é string) e 
    // se são iguais em valor, não são também, porque um é 2 e o outro é 5... seriam iguais se fossem 5 e 5, porém ainda sim daria 'false', 
    // porque para dar 'true' as duas validações têm que dar true.
    echo "<br>";
    var_dump($num1 != $num3);  //bool (true)
    echo "<b>";
    var_dump($num1 < $num3); //bool (true)
    


?>