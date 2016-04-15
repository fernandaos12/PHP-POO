<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo date('d/m/Y'); ?></title>
</head>
<body>
<h1>Este é o mês : <?php echo date('F'); ?></h1>
<h2>Esta é a semana <?php echo date('W'); ?> do ano de <?php echo date('Y'); ?> </h2>

<p>Teste de calendario</p>
<table border="1">
	<tr>

	<th>Dom</th>
	<th>Seg</th>
	<th>Ter</th>
	<th>Qua</th>
	<th>Qui</th>
	<th>Sex</th>
	<th>Sáb</th>
	</tr>
	<?php calendario(); ?>

</table>

<?php
function calendario(){

$dia = 1;
$semana = array();
	while ($dia < 31) {
		array_push($semana, $dia);
		if (count($semana) == 7){
			linha($semana);
			$semana = array();
		}
		$dia++;
	}
	linha($semana);
}



function linha($semana){

echo "<tr>";
	for ($i=0; $i <= 6 ; $i++) {
		if (isset($semana[$i])){
			echo "<td>{$semana[$i]}</td>";
		}else{
			echo"<td></td>";
		}
	}
echo "<tr>";
}



?>
<table>
</table>
</body>
</html>