<?php 

interface Veiculo {
    public function acelerar($velocidade);
}

 class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "A velocidade é". $velocidade. "km/h";
    }
}
