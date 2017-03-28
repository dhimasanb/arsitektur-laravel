<?php
namespace App;

class Dompet
{
    private $saldo;

    public function __construct($saldo = 100)
    {
        $this->saldo = $saldo;
    }

    public function cekIsi()
    {
        return $this->saldo;
    }
}
