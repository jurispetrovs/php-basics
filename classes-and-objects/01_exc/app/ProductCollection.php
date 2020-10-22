<?php

namespace App;

class ProductCollection
{
    private array $products;

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProductById(int $id): ?Product
    {
        /** @var Product $product */
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        return null;
    }
}