<?php

class User{
    private $name;
    private $surname;
    public $creditCard = 1;
    private $validity;
    public $price;

    public function __construct($_name, $_surname, $_creditCard, $_price){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->creditCard = $_creditCard;
        $this->price = $_price;

        $this->setValidity();
    }

    // SETTER
    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function setCreditcard($_creditCard){
        $this->creditCard = $_creditCard;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setValidity(){
        if($this->creditCard){
            $this->validity = "La carta di credito è valida";
        }else{
            $this->validity = "Transazione negata: carta di credito non valida per l'acquisto.";
        }
        
    }

    // GETTER
    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getValidity(){
        return $this->validity;
    }
}
?>
