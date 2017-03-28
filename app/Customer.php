<?php
namespace App;

class Customer
{
    private $dompet;

    public function __construct(Dompet $dompet)
    {
        $this->dompet = $dompet;
    }

    public function cekDompet()
    {
        return $this->dompet->cekIsi();
    }
}
