<h3>Imprimir em ordem decrescente os numeros 1,2,3 usando função rsort.</h3>
<?php

$numeros = array( 1 , 2 , 3);
rsort($numeros);

foreach ($numeros as $value) {
	echo "$value\n";
}
?>