<?php

// dentro do () fica o parametro da função, se for um parametro default ficaria assim:
//function ola($texto = "mundo")
function ola($texto, $parametro = "boa tarde"){

    return "ola $texto!, $parametro! <br>";
}
echo ola(" ", "boa noite");
echo ola(" ", " ");
echo ola("dominic", "bom dia!");
echo ola("joao");