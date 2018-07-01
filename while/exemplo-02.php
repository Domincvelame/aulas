<?php

$total = 500;

$desconto = 0.9;

//pegue o total e dê o desconto
do {
    $total *=  $desconto;

}
    //apenas quando o total for maior que 100
    while ($total > 100);


    echo $total;



?>