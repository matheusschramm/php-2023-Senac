<?php

class calculadora{
    public $valor01;
    public $valor02;
    public $resultado;

    
    public function testeSomar(){
     valor01 + $this->valor02;
    }
    public function Somar(){
     return $this->valor01 + $this->valor02;
    }
    public function Subtrair(){
     return $this->valor01 - $this->valor02;
    }
    public function Multiplicar(){
     return $this->valor01 * $this->valor02;
    }
    public function Dividir(){
     return $this->valor01 / $this->valor02;
    }


}

$oCalculadora = new calculadora();
$oCalculadora->valor01 = 10;
$oCalculadora->valor02 = 10;

echo '<br>a soma é:<br>'.$oCalculadora->Somar(); 
echo '<br>a subtração é:<br>'.$oCalculadora->Subtrair(); 
echo '<br>a mutiplicação é:<br>'.$oCalculadora->Multiplicar(); 
echo '<br>a divisão é:<br>'.$oCalculadora->Dividir(); 
