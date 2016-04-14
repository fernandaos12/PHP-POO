<?php

require_once 'classes/animal.class.php';
require_once 'classes/cachorro.class.php';

$animal = new Cachorro("Rex", 5);
echo $animal-> Descricao();
echo "<br>";
echo $animal-> Falar();
?>