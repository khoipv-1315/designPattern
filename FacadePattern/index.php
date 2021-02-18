<?php

require_once 'Facade/ProductOrderFacade.php';

$productId = 111;
$order = new productOrderFacade($productId);
$order->generateOrder();
