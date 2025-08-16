<?php
$pessoa = [
    //poderia ser tudo na mesma linha:
//     "Nome" => "João", "Idade" => 23, "Cidade" => "São Paulo"
// ]

//ou cada um em uma linha:
    "Nome" => "João", //não usa ponto e vígula, só vírgula porque é como se estivesse na mesma linha 
    "Idade" => 23, 
    "Cidade" => "São Paulo" //não precisa colocarnem vírgula (pq n vai continuar) nem ponto e vírgula pq vai colocar no final, depois do colchetes fechando
];

echo $pessoa["Nome"]; //Saída: João
echo $pessoa["Idade"]; //Saída: 23
echo $pessoa["Cidade"]; //Saída: São Paulo

?>