<?php
class Products {
    public $pic;
    public $item;
    public $animal;
    public $price;
    public $weight;
    public $ingredients;

    function __construct($pic, $item, $animal){
        $this->pic = $pic;
        $this->item = $item;
        $this->animal = $animal;
    }
}
?>