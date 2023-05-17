<?php
include __DIR__ . '/Product.php';
class Doghouse extends Product{
    public 
    $material, $size;

    public function __construct(string $name, int $price, string $category, string $material, int $size){
        parent::__construct($name, $price, $category);
        $this->material = $material;
        $this->size = $size;
    }
}