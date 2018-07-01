<?php

//quando o final do nosso array é 0 estou falando da montadora quando for de 1,2,3 é de um modelo dessa montadora. se a Ford é [1], [0] entao todos os carros com "[1] e ["qualquer numero"] sao da ford

//ARRAY BIDIMENSIONAL [X][Y]
$carros[0][0] = "GM";
$carros[0][1] = "cobalt";
$carros[0][2] = "onix";
$carros[0][3] = "camaro";

$carros[1][0] = "ford";
$carros[1][1] = "fiesta";
$carros[1][2] = "fusion";
$carros[1][3] = "Eco Sport";

var_dump ($carros [0][3]);
echo "<hr>";

//end = exibe a ultima posição da posição do array na posição que vc desejar, no caso é "[1]"
echo end($carros[1]);

?>