<?php

require_once __DIR__ . '/../classes/Toys.php';

trait Sconto {
    public $sconto;
    
    public function getSconto($coloreProdotto){
        if ($coloreProdotto == "rosso") {
            $this -> sconto = 20;
        }

        return $this -> sconto;
    }
}

?>