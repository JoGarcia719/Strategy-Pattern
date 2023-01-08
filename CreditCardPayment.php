<?php

// The CreditCardPayment class represents a strategy for paying an invoice using a credit card
class CreditCardPayment
{
    private $name;
    private $number;
    private $ccv;
    private $expiryMonthAndYear;

    public function __construct($name, $number, $ccv, $expiryMonthAndYear)
    {
        $this->name = $name;
        $this->number = $number;
        $this->ccv = $ccv;
        $this->expiryMonthAndYear = $expiryMonthAndYear;
    }

    public function pay($amount)
    {
        // Pay the given amount using the specified credit card
        echo "Paying $" . $amount . " using credit card (name: " . $this->name . ", number: " . $this->number . ", CCV: " . $this->ccv . ", expiry: " . $this->expiryMonthAndYear . ")..." . PHP_EOL;
    }
}