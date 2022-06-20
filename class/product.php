<?php

class Product{
    public $type;
    public $forWhichAnimal;

    public function __construct($_type, $_forWhichAnimal){
        $this->type = $_type;
        $this->forWhichAnimal = $_forWhichAnimal;
    }

    // SETTER
    public function setType($_type){
        $this->type = $_type;
    }

    public function setAnimal($_forWhichAnimal){
        $this->forWhichAnimal = $_forWhichAnimal;
    }

    // GETTER
    public function getType(){
        return $this->type;
    }

    public function getAnimal(){
        return $this->forWhichAnimal;
    }
}

?>