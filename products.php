<?php
class Products {
    public $pic;
    public $item;
    public $animal;
    private $price;

    function __construct($pic, $item, $animal){
        $this->pic = $pic;
        $this->item = $item;
        $this->animal = $animal;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getPrice(){
        return $this->price;
    }
}
?>