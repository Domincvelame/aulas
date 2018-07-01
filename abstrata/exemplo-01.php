<?php


interface Veiculo{

    public function acelerar($velocidade);
}


abstract class Automovel implements Veiculo{

    public function acelerar($velocidade)
    {
        echo "a aceleração é".$velocidade." km/h";
    }
}

class DelRey extends Automovel{

    public function empurrar(){


    }
}

$carro = new Automovel();

$carro->acelerar(200);