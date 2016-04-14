<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$sexmasc = $_GET["sexmasc"];
$sexfem = $_GET["sexfem"];


if ($idade < 25) && (isset($_GET[$sexfem]){
	echo "Olá,".$nome."!<br>Você foi ACEITA! Parabéns!";
}
else {
	echo "Olá,".$nome."!<br>Infelizmente você não foi aceito.
	";
}

echo "<br><br>";

?>
