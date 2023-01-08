<?php

// The Order class represents a customer order, including the customer, shopping cart, and invoice and payment information
class Order
{
    private $customer;
    private $cart;
    private $invoiceGenerator;
    private $paymentMethod;

    public function __construct(Customer $customer, ShoppingCart $cart)
    {
        $this->customer = $customer;
        $this->cart = $cart;
    }

    public function getItems()
    {
        return $this->cart->getItems();
    }

    public function getTotal()
    {
        return $this->cart->getTotal();
    }

    public function setInvoiceGenerator(InvoiceStrategy $generator)
    {
        $this->invoiceGenerator = $generator;
    }

    public function generateInvoice()
    {
        // Generate an invoice using the specified invoice generation strategy
        $this->invoiceGenerator->generate($this);
    }

    public function setPaymentMethod(PaymentStrategy $payment)
    {
        $this->paymentMethod = $payment;
    }

    public function payInvoice()
    {
        // Pay the invoice using the specified payment strategy
        $this->paymentMethod->pay($this->getTotal());
    }
}