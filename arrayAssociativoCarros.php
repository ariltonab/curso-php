<?php

$carros = [
    "Modelo" => "T-cross sense",
    "Marca" => "Volkswagen",
    "Valor" => 94000,
    "Ano" => 2022
];

echo $carros["Modelo"].PHP_EOL; //saída: T-cross sense
echo "R$" . $carros["Valor"] . " reais"; //saída: 

?>