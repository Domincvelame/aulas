<?php

$pessoa = array(
    'nome'=> 'João',
    'idade'=> 20
);


//percorre os values do array e se tiver um inteiro ele soma 100
foreach ($pessoa as &$value) {

    //gettype = tipo de dado, integer = inteiro
    if (gettype($value) === 'string') {

        //tem algo errado ai bixão! deve ser sintaxe, olhe dps
       echo str_replace($value, "J", 2);

    }
                   
    elseif (gettype($value) === 'integer') $value+= 10;
        
        echo $value.'<br>';
    

}

print_r($pessoa);