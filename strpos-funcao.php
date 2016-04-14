<?php
echo "<h2>funcao STRPOS</h2><br><br>";

$frase = "O rato roeu a roupa do rei de roma";
$encontrar = "roupa";
$posicao = strpos($frase, $encontrar);

if ($posicao){
	echo "Palavra foi encontrada na posição --> ".$posicao;
}else{
	echo "Não foi encontrada nada";
}

?>
<br><br>


<?php
//arrays multidimensionais

echo "<h2>Arrays multidimensionais</h2><br><br>";

$carros = array ('palio' => array('cor'=>'azul', 'ano'=> '2015', 'potencia' => '1.0'),
				'corsa' => array('cor'=>'prata', 'ano'=>'2013', 'potencia '=>'1.8'));



echo $carros['palio']['cor'];
echo "<br><br> ----------- <br><br>";

foreach ($carros as $modelo => $caracteristicas) {
	echo "=> modelo --". $modelo."<br>";
	foreach ($caracteristicas as $caracteristicas => $value) {
		echo "=> caracteristicas -- ". $caracteristicas. "--". $value."<br>";
	}
}

//Juntar os arrays
echo "<h2>Juntar os arrays</h2><br><br>";


$frutas = array ('banana', 'maca');
$verduras = array ('cebolinha','coento');

$c = array_merge($verduras,$frutas);

var_dump($c);

//Verificar se no array tem um valor

echo "<h2>Verificar se no array tem um valor</h2><br>";

$bebidas = array('refrigerante','agua','vodka','suco','cerveja','agua de coco');

if (in_array('suco', $bebidas)) {
	echo "No array foi encontrado suco";
	echo "<br> O array contem ".count($bebidas). " posicoes";
}else{
	echo "Não há suco no array";
}

echo "<h2>Array reverse</h2>";

$resultado = implode('+',$frutas);
var_dump($resultado);


$contario = array_reverse($bebidas);
var_dump($contario);

echo "<h2>Adicona elemento no inicio do array</h2>";

array_unshift($bebidas, 'cachaça');
var_dump($bebidas);

?>