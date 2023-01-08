<?php

// The Customer class represents a customer of the eCommerce store
class Customer
{
    private $name;
    private $address;
    private $email;

    public function __construct($name, $address, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }
}