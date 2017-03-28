<?php
namespace App;

class CampaignMonitor {

    public function add($email)
    {
        return 'subscribing ' . $email . ' to campaign monitor server.';
    }
}
