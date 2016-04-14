<?php

$numero01 = $_GET["num01"];

if ($numero01 % 10 == 0) {
	echo "O numero divisivel por 10";
}
else {
	echo "Nao divisivel por 10";
}

echo "<br><br>";
if ($numero01 % 5 == 0) {
	echo "O numero divisivel por 5";
}
else {
	echo "Nao divisivel por 5";
}
echo "<br><br>";

if ($numero01 % 2 == 0) {
	echo "O numero divisivel por 2";
}
else {
	echo "Nao e divisivel por 2";
}

?>