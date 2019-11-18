<?php

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
		echo "Limpado em 321";
	}
}

$carro = new Veiculo();
$carro->Andar();