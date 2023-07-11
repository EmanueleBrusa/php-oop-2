<?php
class Toys extends Products {
    public $traits;
    public $size;

    public function __construct($pic, $item, $animal, $traits, $size){
        parent::__construct($pic, $item, $animal);
        $this->traits = $traits;
        $this->size = $size;
    }
}
?>