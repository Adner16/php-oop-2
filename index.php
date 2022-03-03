<?php

$subscription = false;

class Products {
    public $name;
    public $barCode;
    public $price;
    public $discount;
    public $finalPice;
    public function setSconto($subscription){
        if($this->subcription == true){
            $this->discount = 20;
        }
    }
    public function getPrice($discount,$price){
        return $this->finalPrice = $this->price *($discount/100);
    }
    function __construct($name, $barcode, $price, $discount){
        $this->name = $name;
        $this->barcode = $barCode;
        $this->price = $price;
        $this->discount = $discount;
    }
}

class Cuccia extends Products {

}

