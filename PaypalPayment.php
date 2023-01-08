<?php

// The PaypalPayment class represents a strategy for paying an invoice using Paypal
class PaypalPayment
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function pay($amount)
    {
        // Pay the given amount using Paypal
        echo "Paying $" . $amount . " using Paypal (email: " . $this->email . ", password: " . $this->password . ")..." . PHP_EOL;
    }
}