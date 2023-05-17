<?php
include __DIR__ . '/Product.php';
class Game extends Product{
    public 
    $material, $color;

    public function __construct(string $name, int $price, string $category, string $material, string $color){
        parent::__construct($name, $price, $category);
        $this->material = $material;
        $this->color = $color;
    }
}