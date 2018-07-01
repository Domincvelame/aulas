<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

<form/>

<?php

if(isset($_GET)) {

    // vai percorrer o array super global GET 
    //as $keys serão os names do input 
    //e o value é o que as pessoas digitaram em cada um 
    //desses campos
    
    foreach ($_GET as $key => $value){

    echo "nome do campo:" . $key;

    echo "<hr>";

    echo "valor do campo:" . $value;

    echo "<hr>";

    }
}

