<?php

require_once 'vendor/autoload.php';

use App\Product;
use App\ProductCollection;

$productsStorage = new ProductCollection();

$productsStorage->addProduct(new Product(1, "Logitech mouse", 70.00, 14));
$productsStorage->addProduct(new Product(2, "iPhone 5s", 999.99, 3));
$productsStorage->addProduct(new Product(3, "Epson EB-U05", 440.46, 1));

/** @var Product $product */
foreach ($productsStorage->getProducts() as $product) {
    $product->printProduct();
}

$productsStorage->getProductById(1)->setPrice(65.00);
$productsStorage->getProductById(2)->setAmount(7);

echo PHP_EOL;

foreach ($productsStorage->getProducts() as $product) {
    $product->printProduct();
}