<?php
require_once "src/ShoppingCart.php";

use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
    public function testShouldCalculateEmptyCartTotalWithTax()
    {
        $shoppingCart = new ShoppingCart([]);
        $result = $shoppingCart->calculateCartTotals();
        $this->assertEquals(0.00, $result['cartTotalIncludingTax']);
    }

    public function testShouldCalculateEmptyCartTotalWithoutTax()
    {
        $shoppingCart = new ShoppingCart([]); 
        $result = $shoppingCart->calculateCartTotals();
        $this->assertEquals(0.00, $result['cartTotalExcludingTax']);  
    }

    public function testShouldCalculateCartTotalWithTax()
    {
        $items = [
            'apples' => 1.20,
            'oranges' => 0.80
        ];
        $shoppingCart = new ShoppingCart($items);
        $result = $shoppingCart->calculateCartTotals();
        $this->assertEquals(2.40, number_format($result['cartTotalIncludingTax'], 2));
    }

    public function testShouldCalculateCartTotalWithoutTax()
    {
        $items = [
            'apples' => 1.20,
            'oranges' => 0.80
        ];  
        $shoppingCart = new ShoppingCart($items); 
        $result = $shoppingCart->calculateCartTotals();
        $this->assertEquals(2.00, number_format($result['cartTotalExcludingTax'], 2));  
    }
}
