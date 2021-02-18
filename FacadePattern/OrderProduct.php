<?php

// add product to cart
class productQty {
    public function checkQty($productId)
    {
        $qty = 100;

        if($qty > 0) {
            return true;
        } else {
            return true;
        }
    }
}

// add product to cart
class addToCart {
    public function __construct($productId)
    {
        echo 'add product ' . $productId . ' to cart';
    }
}

// calculate ship charge
class shippingCharge {
    function calculateCharge() {
        echo ('Ship charge: 10');
    }
}

// Calculate discount
class discount {
    function applyDiscount() {
        // calculate discount with product
        echo ('discount of product: 10%');
    }
}

// invoice creation
class order {
    function generateOrder() {
        echo ('bill');
    }
}

// Order processing
$productID = 1;
$qtyCheck = new productQty();
if($qtyCheck->checkQty($productID) > 0) {
    // add product to cart
    $addToCart = new addToCart($productID);

    // calculate ship charge
    $shipping = new shippingCharge();
    $shipping->calculateCharge();

    // calculate discount
    $discount = new discount();
    $discount->applyDiscount();

    // invoice creation
    $order = new order();
    $order->generateOrder();
}
