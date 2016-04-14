<?php

/**
* Primeira classe - Fernanda
*/
class Feira{
	var $produto;
	var $preco;


	function TabelaProdutos(){
		echo "Produto -- ".$this->produto."<br>";
		echo "Preco -- R$ ".$this->preco ."<br><br>";
	}
}

?>