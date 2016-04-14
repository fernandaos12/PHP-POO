
<?php

// Uma constante pode ser acessada de uma forma externa ao contexto da classe. A sintaxe da constante:
// Nome da Classe :: Nome da Constante
// e dentro da classe é a sintaxe:
//self::Nome da Constante - O self refere-se a constante na propria classe.

class Funcoes {

  const Pi = 3.14;

}

class Sistema extends Funcoes{

  const VersaoAplicacao = 3.8;

  function __construct($NomeAplicacao){

    echo $NomeAplicacao . "<br />";
    echo self::VersaoAplicacao . "<br />";  //refere-se a classe em questao

    echo parent::Pi . "<br />";  //refere-se aclasse pai
    echo Funcoes::Pi . "<br />";

  }

}

$sistema1 = new Sistema("TreinaWeb");

?>