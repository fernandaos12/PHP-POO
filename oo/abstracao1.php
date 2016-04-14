<?php


abstract class Animal{
	public $nome;
	public $idade;

	final function alimentar(){
		echo "Meu nome é" . $this->nome;
		echo "<br>Me alimento muito bem!";
	}

	/**
	* 
	*/
	class Cachoror extends Animal
	{
		public $raca;
		function Alimentar()
		{
			echo "Minha raça é ".$this->raca;
			echo "<br> Me alimento muito bem, obrigada.";
		}
	}

	$Bob = new Cachoror();
	$Bob->$nome = "BOB";
	$Bob->$raca = "Poodle";
	$Bob->Alimentar();

}
?>