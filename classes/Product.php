<?php

require_once __DIR__ . '/Section.php';
require_once __DIR__ . '/../traits/Purchasable.php';

// Class
class Product {
    public string $img_src;
    public string $name;
    public string $description;
    public Section $section;

    use Purchasable;

    public function __construct(string $img_src, string $name, string $description, int|float $price, int $number, Section $section) {
        $this->img_src = $img_src;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->number = $number;
        $this->available = true;
        $this->section = $section;
    }
}

?>