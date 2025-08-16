<?php
//CONCATENAR É IGUAL A JUNTAR
$nome = "Arilton";
$idade = 19;
$salario = 20000.00;
$status = true;

echo "\n";
//**Como juntar texto e variáveis na mesma linha de código:**
//Opção 1:
//echo "Nome: ".$nome; //junta uma informação na outra. É esse '.' que faz esse trabalho de junção...
//Opção 2 (mais fácil e rápido):
// //echo "Nome: ".$nome. " tem: " . $idade . " anos de idade e seu salário eh: " .$salario . " reais;" . " ele está empregado? " . $status; 

echo "Nome: $nome  tem: $idade anos de idade e seu salário eh: $salario reais; ele está empregado? $status; ";



?> 