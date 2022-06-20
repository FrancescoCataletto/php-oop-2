<?php

require_once __DIR__ . "/product.php";

class Gioco extends Product{
    private $toyType;
    private $toyPrice;

    public function __construct($_type, $_forWhichAnimal, $_toyType, $_toyPrice){

       parent::__construct($_type, $_forWhichAnimal);

        $this->toyType = $_toyType;
        $this->toyPrice = $_toyPrice;
    }

    // SETTER
    public function setfoodType($_toyType){
        $this->toyType = $_toyType;
    }

    public function setfoodPrice($_toyPrice){
        $this->toyPrice = $_toyPrice;
    }
    // GETTER
    public function gettoyType(){
        return $this->toyType;
    }

    public function gettoyPrice(){
        return $this->toyPrice;
    }
}
?>