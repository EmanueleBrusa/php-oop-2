<?php
class Accessories extends Products{
    public $materials;
    public $size;

    public function __construct($pic, $item, $animal, $materials, $size){
        parent::__construct($pic, $item, $animal);
        $this->materials = $materials;
        $this->size = $size;
    }
}
?>