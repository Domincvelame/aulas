<?php

function __autoload ($nomeClasse){
    

    require_once("$nomeClasse.php");
}



$car = new DelRey;
$car-> acelerar(80);