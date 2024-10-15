<?php

require_once __DIR__ . '/Product.php';

// Class
class Food extends Product {
    public int $kcal;

    public function __construct(string $img_src, string $name, string $description, int|float $price, int $number, Section $section, int $kcal) {
        parent::__construct($img_src, $name, $description, $price, $number, $section);
        $this->kcal = $kcal;
    }
}

?>