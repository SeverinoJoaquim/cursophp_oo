<?php
// Definir a estrutura do objeto

/**
 * 
 */
class Pessoa{
	
	public $nome;
	public $idade;

	public function Falar(){
		echo $this->nome.", de ".$this->idade." anos, acabou de falar <br>";
	}
}
// Instanciar a classe pessoa
$rodrigo = new Pessoa();
$rodrigo->nome = "Severino Joaquim de Lima";
$rodrigo->idade = 54;
$rodrigo->Falar();

echo $rodrigo->nome;