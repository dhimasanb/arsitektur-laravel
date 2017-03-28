<?php
namespace App;

class RekeningPonsel implements PaymentMethod
{
  private $pulsa;
  private $phoneNo;

  public function __construct($pulsa = 100, $phoneNo = null)
  {
      $this->pulsa = $pulsa;
      $this->phoneNo = $phoneNo;
  }

  public function cekIsi()
  {
      return $this->pulsa . ' pulsa tersisa.';
  }
}
