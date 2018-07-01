<?php

$diaDaSemana = date("w");

var_dump($diaDaSemana);
switch ($diaDaSemana){
    //se o date("w") retornar 0 ele imprime "domingo"
    case 0:
    echo "Domingo";
    break;

    case 1:
    echo "Segunda-Feira";
    break;

    case 2:
    echo "Terça-Feira";
    break;

    case 3:
    echo "Quarta-Feira";
    break;

    case 4:
    echo "Quinta-Feira";
    break;

    case 5:
    echo "Sexta-feira";
    break;

    case 6:
    echo "Sábado";
    break;

    //caso seja passado um valor diferente dos cases temos um retorno padrão://
    default:
    echo "Data inválida!!";



}

