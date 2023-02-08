
<?php 

class Veiculo {

    public $modelo;
    public $cor;
    public $preco;

    public function __construct($preco = false) {
        if($preco){
            $this->preco = $preco;
        }

        echo '<br> construct sendo chamado...<br>';
    }

    public function mostraPreco(){

        $this->preco = isset($this->preco) ? $this->preco : "0,00";

        echo '<br>preço do veiculo:' . $this->preco . '<br>';
    }

    public function ligar(){
        echo 'Veiculo ligado<br>';
    }

    public function desligar(){
        echo 'Veiculo desligado<br>';
    }

    public function insereModelo($modelo){
        $this->modelo = $modelo;
    }

    public function mostraModelo(){
        return $this->modelo;
    }

}
