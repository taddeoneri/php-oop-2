<?php
include __DIR__ . '/Product.php';
class Food extends Product{
    public 
    $brand, $weight;

    public function __construct(string $name, int $price, string $category, string $brand, int $weight){
        parent::__construct($name, $price, $category);
        $this->brand = $brand;
        $this->weight = $weight;
    }
}