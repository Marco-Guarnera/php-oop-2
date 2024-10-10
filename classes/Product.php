<?php

// Class
class Product {
    public string $img;
    public string $name;
    public string $description;
    public int|float $price;

    public function __construct(string $img, string $name, string $description, int|float $price) {
        $this->img = $img;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}

?>