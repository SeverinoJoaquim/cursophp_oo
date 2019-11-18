<?php
// Interface

interface Crud {
	public function create($data);
	public function read();
	public function update();
	public function delete();
}

class Noticias implements Crud {

	public function create($data) {
		//  lógica para criar uma notícia
	}

	public function read() {
		// lógica para ler um,a notícia
	}

	public function update() {
		// lógica para atualizar uma notícia	
	}

	public function delete() {
		// lógica para excluir uma notícia
	}	
}