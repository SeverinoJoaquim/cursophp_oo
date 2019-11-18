<?php
// Polimorfismo

class Animal {
	public function Andar(){
		echo "O animal andou";
	}
}

class Cavalo extends Animal {
	
	public function Andar() {
		echo "O cavalo andou!";
	}
}

$animal = new Cavalo();
$animal->Andar();