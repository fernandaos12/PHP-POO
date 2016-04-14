<?php

//classe cheque especial como exemplo de polimorfismo
require_once 'classes/cheque.class.php';

class Chequeespecial extends Cheque
{
	function CalcularJuros(){
		return $this->Valor * 1.10;
	}

	function TipodeCheque(){
		echo " , Cliente tem Cheque Especial";
	}
}
?>