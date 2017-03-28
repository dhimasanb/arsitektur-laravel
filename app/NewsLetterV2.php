<?php
namespace App;

class NewsLetterV2 {

    protected $campaignMonitor;

    public function __construct(CampaignMonitor $campaignMonitor)
    {
        $this->campaignMonitor = $campaignMonitor;
    }

    public function register($email)
    {
        return $this->campaignMonitor->add($email);
    }
}
