<?php

require_once ("Veiculo.php");
class Moto extends Veiculo {

    public $cilindradas;

    public function empinar(){
        echo '<br>empinando moto<br';
    }

    public function mostraCilindradas(){
        return $this->cilindradas;
    }
}