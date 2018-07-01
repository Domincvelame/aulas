<?php

$frase = "eu amo php";

$palavra = "eu";
$q = strpos($frase, $palavra);
var_dump($q);
$texto = substr($frase, $q + strlen($palavra), strlen($frase));

echo strtoupper($texto);
