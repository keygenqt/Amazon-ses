<?php

namespace keygenqt\amazonSes;

use \yii\base\Exception;
use yii\base\Widget;

class AmazonSes extends Widget
{
    const AWS_US_EAST_1 = 'email.us-east-1.amazonaws.com';
    const AWS_US_WEST_2 = 'email.us-west-2.amazonaws.com';
    const AWS_EU_WEST1 = 'email.eu-west-1.amazonaws.com';

    public $access;
    public $secret;
    public $email;
    public $host = self::AWS_EU_WEST1;

    /** @var \SimpleEmailService */
    private $ses;

    public function init()
    {
        if (!$this->access || !$this->secret) {
            throw new Exception("Access and secret required!");
        }
        $this->ses = new \SimpleEmailService($this->access, $this->secret, $this->host);
        parent::init();
    }

    public function send(array $emails, $subject, $body)
    {
        $m = new \SimpleEmailServiceMessage();
        $m->setFrom($this->email);
        $m->addTo($emails);

        $m->setSubject($subject);
        $m->setMessageFromString('', $body);

        return $this->ses->sendEmail($m);
    }
}