<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

Abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veiculo acelerou até ".$velocidade." km/h<br/>";

    }

    public function frenar($velocidade){

        echo "O veiculo frenou até ".$velocidade." km/h<br/>";

    }

    public function trocarMarcha($marcha){

        echo "O veiculo engatou a marcha ".$marcha."<br/>";

    }

}

class DelRey extends Automovel{

    public function empurrar(){

        
    }

}

$carro = new DelRey();
$carro->acelerar(500);
$carro->frenar(120);
$carro->trocarMarcha(5);

?>