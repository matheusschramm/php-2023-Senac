<?php
// O que sao objetos?
// o que sao atributos?
// o que sao metodos de uma classe?Definem comportamento da classe

// o que sao classes?
require_once ("Carro.php");

// passa como parametro no metodo construct
// o que tiver entre parentesis
// da um exemplo

$oCarro = new Carro('15000,00');
$oCarro->modelo = 'Fusca';
$oCarro->cor = 'Branco';
$oCarro->quantidadePortas = 2;

echo $oCarro->mostraModelo() . $oCarro->ligar();

echo $oCarro->mostraPreco();
echo $oCarro->abrirPorta("direita");

echo '<br>################################################################<br>';
$oCarro2 = new Carro();
$oCarro2->modelo = 'Civic';
$oCarro2->cor = 'Prata';
$oCarro2->quantidadePortas = 4;

echo $oCarro2->mostraModelo() . $oCarro2->ligar();

echo $oCarro2->mostraPreco();

echo $oCarro2->abrirPorta("esquerda");

echo '<br>################################################################<br>';
require_once ("Moto.php");
$oMoto = new Moto();
$oMoto->modelo = 'Honda';
$oMoto->cor = 'Prata';
echo $oMoto->mostraModelo() . $oMoto->ligar();

echo $oMoto->empinar();