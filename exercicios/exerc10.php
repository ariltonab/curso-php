<?php
$prod1 = 10.9;
$prod2 = 25.79;
$prod3 = 99.99;
$prod4 = 38.50;
$prod5 = 29.90;
$valorTotalCompra = $prod1 + $prod2 + $prod3 + $prod4 + $prod5;
$desconto = 0.925;

echo "Valor sem desconto: " . $valorTotalCompra.PHP_EOL;
$valorTotalCompraComDesc = $valorTotalCompra * $desconto;
echo "Valor com desconto: " . $valorTotalCompraComDesc;

?> 
