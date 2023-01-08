<?php

// The Application class represents the main entry point of the program
class Application
{
    public static function run()
    {
        // Create a shopping cart and add some items to it
        $cart = new ShoppingCart();
        $cart->addItem(new Item("123456", "Shampoo", 9.99), 2);
        $cart->addItem(new Item("234567", "Soap", 4.99), 4);
        $cart->addItem(new Item("345678", "Toothpaste", 2.99), 1);

        // Display the items in the shopping cart
        echo "Shopping Cart:" . PHP_EOL;
        $cart->displayItems();
        echo PHP_EOL;

        // Create a customer
        $customer = new Customer("John Doe", "123 Main Street, Anytown, USA", "john@example.com");

        // Create an order and set the invoice and payment strategies
        $order = new Order($customer, $cart);
        $order->setInvoiceGenerator(new PDFInvoice());
        $order->setPaymentMethod(new CreditCardPayment("John Doe", "4111 1111 1111 1111", "123", "01/2025"));

        // Checkout the order and pay the invoice
        $order->generateInvoice();
        $order->payInvoice();
    }
}

// Run the application
Application::run();