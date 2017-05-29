<?php
/**
 * ShoppingCart
 *
 * Class for doing things concerning the Shopping cart
 *
 * @version 1.0.0
 * @author John McCracken
 * @since 
 * @see https://blog.john-mccracken.com/test-driven-development-mentality
 */

class ShoppingCart
{
    protected $cartTotals = [
        'cartTotalExcludingTax' => 0.00,
        'cartTotalIncludingTax' => 0.00,     
    ];


     /*
     * @method __construct
     *
     * @param array $cartItems
     **/   
    public function __construct(array $cartItems) {
        $this->cartItems = $cartItems;
    }

     /*
     * @method calculateCartTotals
     *
     * Calculate the Cart totals using the passed tax value
     * @param float $tax
     * @return array
     * @todo add validation, throw exception
     **/   
    public function calculateCartTotals($tax = 20)
    {
        foreach ($this->cartItems as $key => $cartItem) {
            $this->cartTotals['cartTotalExcludingTax'] += $cartItem;
            $this->cartTotals['cartTotalIncludingTax'] += $cartItem + $this->calculateTax($cartItem, $tax);
        }

        return $this->cartTotals;
    }

     /*
     * @method testShouldCalculateEmptyCartTotalWithTax
     *
     * Calculate the item tax value.
     * @param float $value item price
     * @param float $tax item tax
     * @return float
     * @todo add validation, throw exception
     **/   
    protected function calculateTax($value, $tax)
    {
        return ($value / 100) * $tax;
    }
}
