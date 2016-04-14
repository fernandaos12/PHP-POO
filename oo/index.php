<?php

include_once 'classes/classes.php';

$produtofeira1 = new Feira();
$produtofeira2 = new Feira();


$produtofeira1 ->produto='Banana';
$produtofeira1 ->preco= 150;

$produtofeira2 ->produto='Peixe';
$produtofeira2->preco= 120;

$produtofeira1 -> TabelaProdutos();
$produtofeira2 -> TabelaProdutos();




?>

