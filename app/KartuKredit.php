<?php
namespace App;

class KartuKredit implements PaymentMethod
{
  private $saldo;
  private $cardNumber;

  public function __construct($saldo = 100, $cardNumber = null)
  {
      $this->saldo = $saldo;
      $this->cardNumber = $cardNumber;
      echo 'membuat kartu kredit...';
  }

  public function cekIsi()
  {
      return $this->saldo . ' saldo tersisa.';
  }
}
