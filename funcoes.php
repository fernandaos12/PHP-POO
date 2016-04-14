<?php

class Funcionarios{

	var $Codigo;
	var $Nome;
	var $Salario = 880;
	var $Departamento = 'Contabilidade';

	function SetSalario(){}

	function GetCargo(){}

	function SetNome(){}

	function GetNome(){}

}
// mostra em forma de array todas as funcoes
print_r (get_class_methods('Funcionarios'));

class Estagiario extends Funcionarios{
	var $Bolsa;
	var $salario;
}

// mostrar a classe pai do objeto

echo "<br><br>";
$maria = new Estagiario;
echo "<br><br>Maria pertence a classe pai -- ".get_parent_class($maria);
echo "<br><br>Estagiario pertence a classe pai -- ".get_parent_class('Estagiario');
echo "<br><br>";

// retorna a q classe pertence o objeto

$jose = new Funcionarios();
echo "<br><br>Jose pertence a classe -- ". get_class($jose);

//verificar se o metodo existes
if (method_exists($jose, 'SetNome')){
	echo "<br>O metodo setnome existe em Jose";
}


?>