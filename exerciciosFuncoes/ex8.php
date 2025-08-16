<?php

function calcularAreaQuardado($lado){
    $resultado = $lado * $lado;
    echo "A área do quadrado de lado $lado cm, é de $resultado cm²";
}

$vlrLado = readline("Informe o valor do lado do quadrado (em cm): ");

calcularAreaQuardado($vlrLado);

?> 