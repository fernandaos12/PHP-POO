
<?php // CURSO PHP OO - CLASSES ESPECIAIS ?>

<?php

//GET_CLASS_VARS -> retorna um array com as propriedades da classe
class Pessoa{

  public $Nome;
  public $Idade;

}

print_r( get_class_vars('Pessoa'));


echo "<br><hr><br>";
?>

<?php
//GET_OBJET_VARS -> retorna um vetor com as propriedades do objeto
class PPessoa{

  public $Nome;
  public $Idade = 30;
  public $BandaFavorita;

}

$pedro = new PPessoa();
$pedro->Nome = "Pedro";
$pedro->Idade = 28;
$pedro->BandaFavorita = "Dream Theater";

print_r( get_object_vars($pedro) );

echo "<br><hr><br>";
?>

<?php

// GET_CLASS -> retorna o nome da classe que o objeto pertence
class Pessoa3{

  public $Nome;
  public $Idade;

}

$pedro = new Pessoa3();

echo get_class($pedro);

echo "<br><hr><br>";
?>

<?php


//GET_PARENT_CLASS -> retorna a classe pai

class Pessoa4{

  public $Nome;
  public $Idade;

}

class Cliente extends Pessoa4{

}

$pedro = new Cliente();

echo get_parent_class($pedro);

echo "<br />";

echo get_parent_class("Cliente");
echo "<br><hr><br>";

?>

<?php

//IS_SUBCLASS_OF  -> retorna um valor booleano e indica se um objeto é derivado de uma classe

class Pessoa5{

  public $Nome;
  public $Idade;

}

class Cliente2 extends Pessoa5{

}

$pedro = new Cliente2();

if( is_subclass_of($pedro, "Pessoa5") ){
  echo "Cliente E filho de pessoa.";
}else{
  echo "Cliente nao e filho de Pessoa.";
}

echo "<br><hr><br>";


?>



<?php

//METHOD_EXIST -> verifica a existencia do metodo no objeto

class Pessoa6{

  public $Nome;
  protected $Idade;

  public function setIdade($Idade){
    $this->Idade = $Idade;
  }

}

$pedro = new Pessoa6();

if( method_exists($pedro, "setIdade") ){
  echo "Este método existe.";
}else{
  echo "Este método não existe.";
}
echo "<br><hr><br>";
?>

<?php
// CALL_USER_FUNC -> executa um metodo ou uma funcao em um parametro, para fazer isso basta colocar seu nome como string para
//executar um metodo de um objeto, basta passar a posicao como um array na posicao 0.

function FuncaoTeste(){
  echo "FuncaoTeste executada. <br />";
}

class Pessoa7{

  public $Nome;
  public $Idade;

  public function EscreveDados(){
    echo "EscreveDados executada.";
  }

}

call_user_func('FuncaoTeste');

$pedro = new Pessoa7();

call_user_func(array($pedro, 'EscreveDados'));

echo "<br><hr><br>";

?>

<?php

//IS_A -> checa o tipo de classe

class Pessoa8{

  public $Nome;
  public $Idade;

}

class Cliente4 extends Pessoa8{

}

$pedro = new Cliente4();

if( is_a($pedro,"Cliente4") ){
  echo "Objeto do tipo Cliente.";
}else{
  echo "Não é um objeto do tipo Cliente.";
}
echo "<br><hr><br>";
?>