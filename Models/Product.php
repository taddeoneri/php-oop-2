<?php
class Product{
    public
    $name, $price, $category;

    public function __construct(string $name, int $price, string $category){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }
}

