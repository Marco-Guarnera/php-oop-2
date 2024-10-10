<?php

require_once __DIR__ . '/Section.php';

// Class
class Product {
    public string $img;
    public string $name;
    public string $description;
    public int|float $price;
    public Section $section;

    public function __construct(string $img, string $name, string $description, int|float $price, Section $section) {
        $this->img = $img;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->section = $section;
    }
}

?>