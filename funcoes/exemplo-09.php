<?php



//função anonima
function teste($callback){

    //proceso lento


    $callback();


}

teste(function(){

    echo "terminou!";
});
