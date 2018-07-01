<?php

function ola(){

    $argumentos = func_get_args();

    return $argumentos;

        if($argumentos [1] === 10){
            
            
            echo "o valor é 10";
        }
}

var_dump(ola("nome", 10));