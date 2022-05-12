<?php

class Prodotto{ 
    //parametri della classe
    public $name;
    public $description;
    public $price;

    //costruttore
    public function __construct($_name, $_description, $_price){    
        $this -> setName($_name);
        $this -> setDescription($_description);
        $this -> setPrice($_price);
    }

    //funzione setter name 
    public function setName($_name){    
        $this -> name = $_name;
    }   

    //funzione getter name
    public function getName(){
        return $this -> name;
    }

    //funzione setter description
    public function setDescription($_description){    
        $this -> description = $_description;
    }   

    //funzione getter description
    public function getDescription(){
        return $this -> description;
    }

    //funzione setter Price
    public function setPrice($_price){    
        $this -> price = $_price;
    }   

    //funzione getter Price
    public function getPrice(){
        return $this -> price;
    }
}

?>