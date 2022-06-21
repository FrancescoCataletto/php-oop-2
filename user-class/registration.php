<?php

require_once __DIR__ . "/user.php";

class Registration extends User{
    private $signed = 1;
    private $discounted;

    public function __construct($_name, $_surname, $_creditCard, $_price, $_signed){

        parent::__construct($_name, $_surname, $_creditCard, $_price);

        $this->signed = $_signed;
        $this->setDiscount();
    }

    // SETTER
    public function setRegistration($_signed){
        $this->signed = $_signed;
    }

    public function setDiscount(){
        if($this->signed && $this->creditCard){
            $this->discounted = ($this->price * 0.8);
        }else{
            $this->discounted = "Nessuno sconto applicato";
        }
    }
    // GETTER
    public function getRegistration(){
        return $this->signed;
    }

    public function getDiscount(){
        return $this->discounted;
    }
}

?>