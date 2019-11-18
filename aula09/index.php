<?php
// Costantes Self e Parent
class Pessoa {
	const nome = "Severino";

	public function exibirNome(){
		echo self::nome;
	}
}

class Rodrigo extends Pessoa {
	const nome = "Joaquim de Lima";

	public function exibirNome(){
		echo parent::nome;
	}
}

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();