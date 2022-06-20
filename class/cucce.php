<?php

require_once __DIR__ . "/product.php";

class Cuccia extends Product{
    private $cucciaType;
    private $cucciaPrice;

    public function __construct($_type, $_forWhichAnimal, $_cucciaType, $_cucciaPrice){

       parent::__construct($_type, $_forWhichAnimal);

        $this->cucciaType = $_cucciaType;
        $this->cucciaPrice = $_cucciaPrice;
    }

    // SETTER
    public function setcucciaType($_cucciaType){
        $this->cucciaType = $_cucciaType;
    }

    public function setcucciaPrice($_cucciaPrice){
        $this->cucciaPrice = $_cucciaPrice;
    }
    // GETTER
    public function getcucciaType(){
        return $this->cucciaType;
    }

    public function getcucciaPrice(){
        return $this->cucciaPrice;
    }
}

$cucciaCane = new Cuccia("Cuccia", "Cane", "Cuccia morbida", "25 euro");
$casaCane = new Cuccia("Cuccia", "Cane", "Casa in legno", "50 euro");
$cucciaGatto = new Cuccia("Cuccia", "Gatto", "Cuscino morbido", "10 euro");
$casaGatto = new Cuccia("Cuccia", "Gatto", "Castello", "40 euro");
?>