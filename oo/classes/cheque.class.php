<?php

//exemplo de polimorfismo

class Cheque
{
	public $Valor;

	function __construct($Valor)
	{
		$this->Valor = $Valor;
	}

	function CalcularJuros(){

		return $this->Valor * 1.20;
	}

	function TipodeCheque(){
		echo " , Cliente tem Cheque Comum";
	}
}
?>