<?php

class Products {
    public $name;
    public $barCode;
    public $price;
    public $discount;
    public $finalPice;

    function __construct($name, $barcode, $price){
        $this->name = $name;
        $this->barcode = $barCode;
        $this->price = $price;
        $this->discount = 0;
    }
    public function setSconto($subscription){
        if($subcription == true){
            $this->discount = 20;
        }
    }
    public function getPrice(){
         $this->finalPrice = $this->price *(1 - ($this->discount/100));
         return $this->finalPice;
    }
    
}

class Food extends Products {
    public $deadline;
    public $species;

    function __construct($name, $barcode, $price, $deadline, $species){
        parent::__construct($name, $barcode, $price);
        $this->deadline = $deadline;
        $this->species = $species;
    }
}

class Toys extends Products {
    public $material;

    function __construct($name, $barcode, $price, $material){
        parent::__construct($name, $barcode, $price);
    }
}

class Customer {
    public $name;
    public $lastName;
    public $age;
    public $sex;

    function __construct($name, $lastname, $age, $sex){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->sex = $sex;
    }
}

class CreditCard {
    public $ownerName;
    public $ownerLastName;
    public $code;
    public $deadLine;

    function __construct($ownerName, $ownerLastName, $code, $dealine){
        $this->ownerName = $ownerName;
        $this->ownerLasName = $ownerLastName;
        $this->code = $code;
        $this->deadline = $deadLine;
    }
}

