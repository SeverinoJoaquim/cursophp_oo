<?php
/* Herança é um recurso que permite que classes compartilhem atributos e métodos, a fim reaproveitar códigos ou comportamentos generalizados */

// Como as classes moto e carro têm atributos e métodos comuns, deve-se criar uma classe genérica.
class Veiculo {
	public $modelo;
	public $cor;
	public $ano;

	public function Andar() {
		echo "Andou";
	}

	public function Parar() {
		echo "Parou";
	}
}
class Carro extends Veiculo {
	public function ligarLimpador() {
		echo "Limpado em 54321";
	}
}

class Moto extends Veiculo {
	
	public function darGrau() {
		echo "Dando grau em 54321";
	}		
}

$carro = new Carro();
$carro->modelo = "Argo";
$carro->cor = "Vermelha";
$carro->ano = "2019";
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);
echo "<br>";
/////////////
$moto = new Moto();
$moto->modelo = " YAMOHA - XTZ-250";
$moto->cor = "Azul/Preta";
$moto->ano = "2021";
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
