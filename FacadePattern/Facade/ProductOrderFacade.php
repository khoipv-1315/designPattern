<?php

require_once __DIR__.'/../OrderProduct.php';

class productOrderFacade {
    public $productId = '';
    public function __construct($productId) {
        $this->productId = $productId;
    }

    // Order processing......
    public function generateOrder() {
        if($this->qtyCheck()) {
            // add product to cart
            $this->addToCart();

            // calculate ship charge
            $this->calulateShipping();

            // calculate discount
            $this->applyDiscount();

            // invoice creation
            $this->placeOrder();
        }
    }

    private function addToCart () {
        // .. add to cart ..
    }

    private function qtyCheck() {
        $qty = 100;

        if($qty > 0) {
            return true;
        } else {
            return true;
        }
    }

    private function calulateShipping() {
        $shipping = new shippingCharge();
        $shipping->calculateCharge();
    }

    private function applyDiscount() {
        $discount = new discount();
        $discount->applyDiscount();
    }

    private function placeOrder() {
        $order = new order();
        $order->generateOrder();
    }
}