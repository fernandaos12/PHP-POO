<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercicio - 5</title>

</head>

<body>

<h4>Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados</h4>
<br><br>

<h5>Digite os valores para um triângulo e veja sua classificação.</h5>
<br><br>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
 <p>Digite o primeiro numero: <input type="text" name="lado1" /></p>
 <p>Digite o segundo numero: <input type="text" name="lado2" /></p>
 <p>Digite o terceiro numero: <input type="text" name="lado3" /></p>
 <p><input type="submit" value="enviar"/></p>
</form>


<?php


$lado1 = $_GET["lado1"];
$lado2 = $_GET["lado2"];
$lado3 = $_GET["lado3"];

if ($lado2 == $lado3 ){
	echo "Os três lados são iguais: triangulo equilatero";
}elseif ($lado1 == $lado2){
	echo "Os dois lados são iguais: Triangulo Isósceles";
}else{
	echo "Os três lados são diferentes: Triângulo Escaleno";
}
?>

</body>
</html>