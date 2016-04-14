<?php

$numero01 = $_GET["num01"];
$numero02 = $_GET["num02"];

$soma = $numero01 + $numero02;
echo "A SOMA DOS NUMEROS = ". $soma;
echo "<br>";

if ($soma >= 20) {
	echo $soma + 8;
}else{
	echo $soma - 5;
}
?>