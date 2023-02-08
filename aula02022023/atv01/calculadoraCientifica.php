<?php
require_once ("calculadora.php"); 

class calculadoracientifica extends calculadora{
   
    public function fatorial(){
        $n = $this->valor01;

        $contador =$n;
        $resultado= 1; 
        
        while($contador > 0){
            $resultado = $resultado * $contador;
            
            echo '<br> contador:' . $contador. 'resultado:' . $resultado;
            
            $contador--;
        }
        return $resultado;
    }
}


   $oCalculadora = new calculadoracientifica();
   $oCalculadora->valor01 = 10;
   $oCalculadora->valor02 = 10;
   
   echo '<br>a soma é:<br>'.$oCalculadora->Somar(); 
   echo '<br>a subtração é:<br>'.$oCalculadora->Subtrair(); 
   echo '<br>a mutiplicação é:<br>'.$oCalculadora->Multiplicar(); 
   echo '<br>a divisão é:<br>'.$oCalculadora->Dividir(); 

   