<?php

abstract class Animal{
	public $nome;
	public $idade;

	function __construction($nome,$idade){
		$this->nome = $nome;
		$this->idade = $idade;
	}

	public function Descricao(){
		return 	$this->nome ."," . $this->idade . "Anos de idade";
	}

	abstract public function Falar();
}

?>