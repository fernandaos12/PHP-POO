<?php

/**
* 
*/
class Cachorro extends Animal
{
	
	public function falar()
	{
		return "Au, Au..";
	}

	public function Descricao(){
		return parent::Descricao() . ", eu sou um cachorro!";
	}
}
?>