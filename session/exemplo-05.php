<?php
//http://php.net/manual/pt_BR/function.session-status.php

require_once("config.php");

//exibe qual o caminho onde esta salvando o id da session no seu pc
echo session_save_path();

//exibe o status da session, ou seja, o valor, se esta habilitada ou n etc
var_dump (session_status());

switch (session_status()){
    
    //caso a session_status retorne um int(0) a sessão esta DISABLED//
    case PHP_SESSION_DISABLED;
    echo " as sessões estiverem desabilitadas.";
    break;
    
    //caso a session_status retorne um int(1) a sessão esta NONE//
    case PHP_SESSION_NONE;
    echo "  as sessões estiverem habilitadas, mas nenhuma existir.";
    break;

    //caso a session_status retorne um int(2) a sessão esta ACTIVE//
    case PHP_SESSION_ACTIVE;
    echo " as sessões estiverem habilitadas, e uma existir";
    break;

}