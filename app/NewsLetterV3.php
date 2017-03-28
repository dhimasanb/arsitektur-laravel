<?php
namespace App;

use App\Contracts\MailListContract;

class NewsLetterV3 {

    protected $mailList;

    public function __construct(MailListContract $mailList)
    {
        $this->mailList = $mailList;
    }

    public function register($email)
    {
        return $this->mailList->register($email);
    }
}
