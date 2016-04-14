<?php

/**
 * Description of classecarro
 *
 * @author Fernanda Oliveira
 */
class carro {
    public $modelo;
    public $ano;
    public $fabricante;
    public $cor;
    
    function movimentacarro(){
        echo 'modelo : '.$this->modelo;
        echo '<br>';
        echo 'ano : '.$this->ano;
        echo '<br>';
        echo 'cor : '.$this->cor;
        echo '<br>';
        echo 'fabricante : '.$this->fabricante;
    }
}
