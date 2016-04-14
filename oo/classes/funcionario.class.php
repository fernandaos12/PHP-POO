<?php

/**
* classe funcionario herdando alguns  objetos de pessoa2
*/
class Funcionarios extends Pessoa2
{
	public $Salario;
	public $cargo;
	public $diadepagamento;

	function __construct($nome,$AnoNascimento, $endereco, $telefone, $Salario,$cargo,$diadepagamento){
		parent::__construct($nome,$AnoNascimento,$endereco,$telefone);

		$this->salario = $Salario;
		$this->cargo = $cargo;
		$this->diadepagamento = $diadepagamento;
	}

	function EscreverSalario(){
		echo "Salario: {$this->Salario}";
	}

	function EscreveDados(){
		parent::EscreveDados();

		echo "Salario: {$this->Salario}<br>
		Cargo: {$this->cargo}<br>
		Dia de Pagamento: {$this->diadepagamento}<br>";
	}

}

?>