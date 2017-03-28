<?php namespace App;

use App\Contracts\MailListContract;

class CampaignMonitorList implements MailListContract {

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
