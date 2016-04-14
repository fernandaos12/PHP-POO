<?php

/**
* Classe pessoa
*/
Class pessoa
{
	public $codigo;
	public $nome;
	public $altura;
	public $idade;
	public $nascimento;
	public $escolaridade;
	public $salario;

	function __construction($codigo,$nome,$altura,$idade,$nascimento,$escolaridade,$salario){
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->altura = $altura;
		$this->idade = $idade;
		$this->nascimento = $nascimento;
		$this->salario = $salario;
	}

	//metodo crescer - aumenta a altura em cm

	function crescer($cm){
		if ($cm > 0){
			$this->altura += $cm;
		}
	}

	//metodo formar escolaridade  q muda o nome da public

	function formacao($titulacao){
		$this->escolaridade = $titulacao;
	}

	// aumenta  a idade em anos

	function envelhecer($anos){
		if ($anos > 0){
			$this->idade += $anos;
		}
	}

	function ObterIdade(){
		$idadeatual = date("Y",time());
		return $idadeatual - $this->nascimento;
	}

	function MostrarPessoa(){

		echo "Nome Titular: ".$this->nome = 'Carlos da Silva';
		echo "<br>Altura: ".$this->altura = 1.90;
		echo "<br>Idade: ".$this->idade = 56;
		echo "<br>Data de Nascimento: ".$this->nascimento = '21/01/1960';
		echo "<br>Escolaridade: ".$this->escolaridade = 'Ensino Superior';

	}


}
?>