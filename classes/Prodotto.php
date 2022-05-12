<?php

class Prodotto{ 
    //parametri della classe
    public $name;
    public $description;
    public $price;

    //costruttore
    public function __construct($_name){    
        $this -> setName($_name);
    }

    //funzione setter 
    public function setName($_name){    
        $this -> name = $_name;
    }   

    //funzione getter 
    public function getName(){
        retutn $this -> name;
    }
}

?>