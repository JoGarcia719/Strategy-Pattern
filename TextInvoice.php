<?php

// The TextInvoice class represents a strategy for generating a text invoice for an order
class TextInvoice
{
    public function generate(Order $order)
    {
        // Generate a text invoice for the given order
        echo "Generating text invoice for order #" . $order->getId() . "..." . PHP_EOL;
    }
}