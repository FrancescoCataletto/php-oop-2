<?php

require_once __DIR__ . "/product.php";

class Cibo extends Product{
    private $foodType;
    private $foodPrice;

    public function __construct($_type, $_forWhichAnimal, $_foodType, $_foodPrice){

       parent::__construct($_type, $_forWhichAnimal);

        $this->foodType = $_foodType;
        $this->foodPrice = $_foodPrice;
    }

    // SETTER
    public function setfoodType($_foodType){
        $this->foodType = $_foodType;
    }

    public function setfoodPrice($_foodPrice){
        $this->foodPrice = $_foodPrice;
    }
    // GETTER
    public function getfoodType(){
        return $this->foodType;
    }

    public function getfoodPrice(){
        return $this->foodPrice;
    }
}
?>