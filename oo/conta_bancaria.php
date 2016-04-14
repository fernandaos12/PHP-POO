<?php

include_once 'classes/pessoa.class.php';
include_once 'classes/pessoa2.class.php';
include_once 'classes/conta.class.php';
include_once 'classes/funcionario.class.php';
require_once 'classes/cheque.class.php';
require_once 'classes/chequeespecial.class.php';

$carlos = new pessoa();


echo "<h3>Manipulando objeto Carlos</h3><br><br>";

$carlos->MostrarPessoa();

//Conta corrente

$conta_carlos = new conta();

	$conta_carlos->agencia = 0667;
	$conta_carlos->codigo = 156;
	$conta_carlos->datadecriacao = '19/01/2015';
	$conta_carlos->titular = 'Carlos da Silva';
	$conta_carlos->senha = 123;
	$conta_carlos->saldo = 523.70;
	$conta_carlos->cancelada = false;


	echo "<h3>Manipulando conta de: {$conta_carlos->titular}</h3><br><br>";

	echo "O saldo atual e de R$ {$conta_carlos->obtersaldo()}<br>";

	$conta_carlos->depositar(200);
	echo "Deposito: O saldo atual e de R$ {$conta_carlos->obtersaldo()}<br>";

	$conta_carlos->retirar(150);
	echo "Retirada: O saldo atual e de R$ {$conta_carlos->obtersaldo()}<br>";


echo "<br><br>-----------------------------------------------------------<br><br>";

$Jorge = new Funcionarios("Jorge da Silva", 1985, "Rua M,1200", "(85)99685656",4000,"Arquiteto",30);
echo "Idade do funcionario:";
echo $Jorge->ObterIdade();
echo "<br>";
echo "Dados do funcionario:<br>";
echo $Jorge->EscreveDados();

echo "<br><br>-----------------------------------------------------------<br><br>";

$Cheques[1] = new Cheque(380.00);
$Cheques[2] = new Chequeespecial(600.00);
$Cheques[3] = new Cheque(230.00);

foreach ($Cheques as $key => $Cheque) {
	echo "<br>Cheque $key ({$Cheque->TipodeCheque()})
	com Juros R$ {$Cheque->CalcularJuros()}";

}


?>