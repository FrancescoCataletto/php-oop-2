<?php

class User{
    private $name;
    private $surname;
    private $creditCard;

    public function __construct($_name, $_surname, $_creditCard){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->creditCard = $_creditCard;
    }

    // SETTER
    public function setName($_name){
        $this->name = $_name;
    }

    public function setSurname($_surname){
        $this->surname = $_surname;
    }

    public function setCreditcard(){
        $this->creditCard = $_creditCard;
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
}

$utenteProva = new User("Francesco", "Cataletto", "True");
?>
