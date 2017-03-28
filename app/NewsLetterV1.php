<?php
namespace App;

class NewsLetterV1 {

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
