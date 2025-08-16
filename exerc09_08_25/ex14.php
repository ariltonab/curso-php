<?php

$nomes = ["Ton", "Sophia", "Carlos"];

for ($i = 0; $i < count($nomes); $i++){ //vai até a qtd de elementos q tem no array
    if ($nomes[$i] == "Carlos") { //vê em cada índice se tem algum 'Carlos' escrito
        echo "Carlos está na lista!";
        break; 
    }
}

?>