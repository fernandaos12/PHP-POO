<?php

/**
* Classe pessoa
*/
class Pessoa2
{
	public $nome;
	public $AnoNascimento;
	public $endereco;
	public $telefone;

	function __construct($nome,$AnoNascimento,$endereco,$telefone)
	{
		$this->nome = $nome;
		$this->AnoNascimento = $AnoNascimento;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
	}

	//metodo escrevedados() pois retorna os dados da pessoa
	function EscreveDados(){
		echo "Nome: {$this->nome}
		<br>Nascimento: {$this->AnoNascimento}<br>
			Endereco: {$this->endereco}<br>
			Telefone: {$this->telefone}<br>";
	}

	//metodo obteridade retorna a idade atual
	function ObterIdade(){
		$ano_atual = date("Y",time());
		echo $ano_atual - $this->AnoNascimento;
	}
}

?>