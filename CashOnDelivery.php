<?php

// The CashOnDelivery class represents a strategy for paying an invoice on delivery
class CashOnDelivery
{
    private $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function pay($amount)
    {
        // Pay the given amount in cash on delivery
        echo "Paying $" . $amount . " in cash on delivery to customer " . $this->customer->getName() . "..." . PHP_EOL;
    }
}