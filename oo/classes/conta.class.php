<?php
Class conta{
		public $agencia;
		public $codigo;
		public $datadecriacao;
		public $titular;
		public $senha;
		public $saldo;
		public $cancelada;


		function __construction($agencia,$codigo,$datadecriacao,$titular,$senha,$saldo,$cancelada){
			$this->agencia = $agencia;
			$this->codigo = $codigo;
			$this->datadecriacao = $datadecriacao;
			$this->titular = $titular;
			$this->senha = $senha;
			$this->saldo = $saldo;
			$this->cancelada = $cancelada;
		}

//metodo retirar

	function retirar($quantia){
		if ($quantia > 0){
			$this->saldo -= $quantia;
		}
	}

//depositar - aumenta o saldo
	function depositar($quantia){
		if ($quantia > 0){
			$this->saldo += $quantia;
		}
	}
// saldo da  conta
	function obtersaldo(){
		return $this->saldo;
	}
	function __destruct(){
		echo "<br><br>Objeto Conta {$this->codigo}  finalizada com sucesso";
	}

	}

?>