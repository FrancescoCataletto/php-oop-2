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

$crocchetteCani = new Cibo("Cibo", "Cani", "Crocchette", "10 euro");
$umidoCani = new Cibo("Cibo", "Cani", "Umido", "15 euro");
$crocchetteGatti = new Cibo("Cibo", "Gatti", "Crocchette", "20 euro");
$umidoGatti = new Cibo("Cibo", "Gatti", "Umido", "25 euro");
?>