<?php

$meses = array(
    "janeiro", "Fevereiro", "Março", "Abril",
    "Maio", "Junho", "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
    

);
//meses e a busca na variavel, $mes é a variavel que ele vai gerar em cada array, e o index é o numero do array [0,1,2...]
foreach ($meses as $index => $mes ){
echo "Indice: $index <br/>";
echo "o mês é: $mes <br>";

}