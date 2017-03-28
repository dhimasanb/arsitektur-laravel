<?php
namespace App\Contracts;

interface MailListContract {

// Mendaftarkan email ke server mailing list
// @param String $email
    public function register($email);

}
