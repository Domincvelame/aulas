<?php


interface Veiculo{

    public function acelerar($velocidade);
}


class Civic implements Veiculo{

    public function acelerar($velocidade)

    {
        echo "a aceleração é".$velocidade." km/h";
    }
}

$carro = new Civic;
$carro->acelerar(100);