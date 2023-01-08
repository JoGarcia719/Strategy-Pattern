<?php

// The ShoppingCart class represents a collection of items in the shopping cart
class ShoppingCart
{
    private $items = [];

    public function addItem(Item $item, $quantity)
    {
        // Add the specified quantity of the given item to the shopping cart
        for ($i = 0; $i < $quantity; $i++) {
            $this->items[] = $item;
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTotal()
    {
        // Calculate the total price of all items in the shopping cart
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function displayItems()
    {
        // Print the contents of the shopping cart
        foreach ($this->items as $item) {
            echo $item->getName() . " - " . $item->getPrice() . PHP_EOL;
        }
    }
}