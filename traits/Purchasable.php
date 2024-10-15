<?php

// Trait
trait Purchasable {
    public int|float $price;
    public int $number;
    public bool $available;

    public function is_available() : bool {
        return $this->number > 0 ? true : false;
    }

    public function purchase(int $quantity = 1) : int|float {
        if ($quantity >= 1 && $this->available && $quantity <= $this->number) {
            $this->number -= $quantity;
            return $this->price * $quantity;
        } else {
            $this->available = false;
        }
    }
}

?>