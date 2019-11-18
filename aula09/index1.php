<?php
// Costantes
class Pessoa {
	const nome = "Joaquim";

	public function exibirNome(){
		echo self::nome;
	}
}

$pessoa = new Pessoa();
$pessoa->exibirNome();