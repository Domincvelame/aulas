<?php

$condicao = true;
//enquanto a condicao for true ele vai executar oq esta entr chaves
while($condicao){
     
    $numero = rand(1, 1000);

    if ($numero === 3){

        echo "PARABÉNS, VOCÊ ACHOU!! ";

        $condicao = false;
    }

    echo "numero sorteado é: $numero<hr> ";
}
