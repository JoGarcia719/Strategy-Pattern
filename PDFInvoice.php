<?php

// The PDFInvoice class represents a strategy for generating a PDF invoice for an order
class PDFInvoice
{
    public function generate(Order $order)
    {
        // Generate a PDF invoice for the given order
        echo "Generating PDF invoice for order #" . $order->getId() . "..." . PHP_EOL;
    }
}