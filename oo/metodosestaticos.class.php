<?php

  class Utils{

    public static $propriedade = "<b>TreinaWeb</b> e-Learning <br />";

    public static function MetodoEstatico(){
      echo "Metodo estatico. <br />";
    }

  }

  class Aplicacao extends Utils{

    public function __construct(){
      echo parent::$propriedade;
      echo "<br /> " . parent::MetodoEstatico() . "<br />";
    }

    public static function OutroMetodoEstatico(){
      echo parent::$propriedade;
      echo "<br /> " . parent::MetodoEstatico() . "<br />";
    }

  }

  // Acessando

  $objeto = new Aplicacao();
  Aplicacao::OutroMetodoEstatico();




/*
OOP: Quando usar métodos estáticos

Atenção: Este artigo é uma repostagem do conteúdo do site antigo. Se você encontrar erros ou itens desatualizados, por favor avise-nos nos comentários.

 

Gostaria de saber se é recomendável ou não utilizar classes com métodos estáticos ?

Quais os benefícios e contra indicações aos métodos estáticos?

 

 

O conceito de métodos estáticos é bem simples: métodos que realizam procedimentos sem estarem vinculados a um objeto.
Como assim? Quando se envia uma mensagem a um objeto da classe Casa, neste caso $casa->abraPorta(), o método abraPorta() recebe implicitamente o objeto $casa para alterar seu estado interno (que são suas características, atributos). Esse objeto é referenciado pelo operador $this. Esse comportamento é chamado de Acoplamento estático.

Logo, o método abraPorta() sempre será o mesmo, porém receberá objetos diferentes, como por exemplo $casaDoJoao->abraPorta() e $casaDaMaria->abraPorta(). Você está enviando a mesma mensagem para objetos diferentes, pertencentes a mesma classe, que serão acoplados ao método abraPorta(). Pode-se ver que métodos normais precisam necessariamente vinculados a um objeto.

Quando você declara um método do tipo estático, essa obrigatoriedade some, pois o método não irá mais ser acoplado a um objeto. Ele passa a ser um método “Solto”, pois como ele não é acoplado a um determinado objeto de uma determinada classe, vc não tem mais a possibilidade de usar o operador $this.

Dessa forma, métodos estáticos são métodos que não se acoplam a objetos, mas sim pertencem a classes. Como assim? Uma classe é um conjunto de características “virtuais”(ou um script) de como se construir um objeto. Métodos normais são declarados dentro das classes, porém trabalham com os dados dos objetos. Métodos estáticos são declarados dentro das classes, mas não há necessidade de se instanciar(concretizar, criar) um objeto para usá-lo.

Portanto, vemos que métodos estáticos são pertencentes à própria classe e independente de objetos. Por isso quando se chama um método estático, é necessário identificar em qual classe ele foi declarado, como por exemplo:

$resultado = Calculo::somar($a , $b);

Ou seja: métodos estáticos devem ser usados para realizar operações que não tem vínculo com objetos. Em outras palavras, devem ser utilizados em casos onde não haja necessidade de alterar atributos de algum objeto. :)

Aprofundando mais, basicamente existem 2 categorias de métodos: Método estáticos (ou de classes) e métodos comuns.
Métodos comuns alteram(ou podem alterar) o estado interno do objeto ao qual foram acoplados, devido a terem acesso ao operador $this internamente. Estes métodos, para implementar o conceito de Encapsulamento na orientação a objetos, possuem 4 tipos de visibilidade, porém o PHP — e outras linguagens — implementam somente 3 tipos: privado, protegido e público.

    Um método privado(assim como atributos privados) só pode ser acessado(ou seja: só é visível) por outros métodos comunsdentro da classe;
    Um método protegido(assim como atributos protegidos) é semelhante ao privado, porém as classes filhas(ou seja: as classes que herdam as características da classe pai, ou derivam a classe pai) também podem acessar este método. Entretanto ele ainda não pode ser utilizado externamente, como enviar uma mensagem a um objeto em um ponto qualquer de um programa;
    Já método público(assim como atributos públicos) é liberado geral: pode ser usado tanto dentro como fora da classe, e em todas as outras classes filhas, etc.

Os métodos estáticos compartilham estes mesmos tipos de visibilidade, seguindo os mesmos conceitos. Porém neles não se pode utilizar o operador $this que só é criado quando o método é acoplado a um objeto(porém ele não é mais estático).

Dessa forma, vc pode ter muito bem um método public static function a() {…} e outro private static funcion b() {…}. O método a() é estático público e pode ser usado em qualquer da sua aplicação, porém o método b() é estático privado, e só pode ser utilizado dentro da classe na qual ele foi declarado.

Portanto a recomendação é: utilize métodos estáticos somente para funções onde não há necessidade de alterar o estado interno de um objeto. Normalmente métodos estáticos são métodos auxiliares, escritos para dar suporte genérico a outros métodos. Um exemplo é um método de ordenação de vetor: ele recebe um vetor como parâmetro e ordena-o, retornando em seguida. Ele pode ser usado em diversos locais, porém não altera o estado interno de nenhum objeto. Logo, ele é um ótimo candidato a se tornar um método estático. 😉

 

 */
?>