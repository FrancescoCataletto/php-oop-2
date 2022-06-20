<?php

class User{
    private $name;
    private $surname;
    private $creditCard;
    private $validity;

    public function __construct($_name, $_surname, $_creditCard){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->creditCard = $_creditCard;

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

    public function setValidity(){
        if($this->creditCard === "True"){
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

    public function getValidity(){
        return $this->validity;
    }
}

$francesco = new User("Francesco", "Cataletto", "True");
$stefano = new User("Stefano", "Corradi", "False");
?>
