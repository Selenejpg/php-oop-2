<?php

class Toys extends Prodotto {
    //parametri specifici dei giochi
    public $dimensioni;
    public $colore;

    //costruttore
    public function __construct($_name, $_description, $_price, $_dimensioni){    
        parent::__construct($_name, $_description, $_price);
        $this -> setDimensioni($_dimensioni);
        $this -> setColore();
    }

    //funzione setter dimensioni 
    public function setDimensioni($_dimensioni){    
        $this -> dimensioni = $_dimensioni;
    }   

    //funzione getter dimensioni
    public function getDimensioni(){
        return $this -> $dimensioni;
    }

    //funzione setter colore 
    public function setColore(){    
        $this -> colore = 'rosso';
    } 

    //funzione getter colore
    public function getColore(){
        return $this -> colore;
    }

    //funzione custom che modifica il colore
    public function setChangeColor($_nomeProdotto){
        //se il nome del prodotto ha più di 3 lettere assegna "rosso", altrimenti assegna "blu"
        if (strlen($_nomeProdotto) > 3) {
            $this -> colore = "blu";
        }else {
            $this -> colore = "rosso";
        }
    }

}

?>