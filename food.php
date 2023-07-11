<?php
class Food extends Products {
    public $weight;
    public $ingredients;

    public function __construct($pic, $item, $animal, $weight, $ingredients){
        parent::__construct($pic, $item, $animal);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
};
?>