<?php namespace App;

use App\Contracts\MailListContract;

class KirimSurat implements MailListContract {

public function register($email)
    {
        return 'Mendaftarkan email ' . $email . ' ke server Kirim Surat.';
    }
}
