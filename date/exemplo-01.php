<?php

//d = dia, m= mês e Y = ano com 4 digitos
// H= hora, i= minuto e s= segundo
echo date("l, d/m/Y H:i:s");

echo "<br>";

echo time();

echo "<br>";

//converte string para time stanp
echo strtotime("+1 day");

$ts = strtotime("2001-09-11");

echo "<br>";

echo date($ts);