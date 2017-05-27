<?php

class ShoppingCart
{
    protected $cartTotals = [
        'cartTotalExcludingTax' => 0.00,
        'cartTotalIncludingTax' => 0.00,     
    ];

    public function __construct(array $cartItems) {
        $this->cartItems = $cartItems;
    }

    public function calculateCartTotals($tax = 20)
    {
        foreach ($this->cartItems as $key => $cartItem) {
            $this->cartTotals['cartTotalExcludingTax'] += $cartItem;
            $this->cartTotals['cartTotalIncludingTax'] += $cartItem + $this->calculateTax($cartItem, $tax);
        }

        return $this->cartTotals;
    }

    protected function calculateTax($value, $tax)
    {
        return ($value / 100) * $tax;
    }
}
