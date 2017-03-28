<?php
namespace App;

use App\Contracts\MailListContract;

class MailChimpList implements MailListContract {
    protected $mailchimp;

    public function __construct(MailChimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    public function register($email)
    {
        return $this->mailchimp->subscribe($email);
    }
}
