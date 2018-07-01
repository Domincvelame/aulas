<?php

//LC_ALL = mude toda a configuração para a que vou passar
//pt_BR padraõ de idioma portugues para linux
//pt_BR.utf-8 portugues com utf-8
//portuguese padrão do linux
setlocale (LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//%A dia da semaan, %j quantidade de dias passados no intervalo de  ate 366
echo strtoupper(strftime("%A, %j"));