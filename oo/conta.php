<?php

  class Conta {

    private $Limite;
    private $Saldo;
    protected $cpmf;

    function __construct($Saldo){

    $this->Saldo = $Saldo;
    $this->Limite = 200;

    $this->cpmf = 0.005;

    }

    function Deposita($Valor){

    if( $Valor>0 ){

      $this->Saldo += $Valor;

    }

    }

    function Saca($Valor){

    if( $this->Saldo + $this->Limite >= $Valor  ){

      $this->Saldo -= $Valor + $Valor * $this->cpmf;
      return true;

    }else{
      return false;
    }

    }

    function getSaldo(){

    return $this->Saldo;

    }


  }

  class ContaCorrente extends Conta{

    function __construct($Saldo){

      parent:: __construct($Saldo);

      $this->cpmf = 0.01;

    }

  }

  $conta2 = new ContaCorrente(600.00);
  $conta2->Deposita(100.00);

  if( !( $conta2->Saca(800) ) ){
    echo "Limite indisponível. <b>Saldo disponível:</b> " . $conta2->getSaldo();
  }else{
    echo "Saque efetuado! <b>Saldo disponível:</b> " . $conta2->getSaldo();
  }

?>