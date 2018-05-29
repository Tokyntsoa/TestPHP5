<?php

class testPHPClass {
    private $_text = "Akory aby ô";
    private $_nbr1 = 3;
    
    public function  AfficheText(){
        echo 'Salut '.$this->_text."<br/><br/><br/>";
    }
    
    public function  Calcul(){
        for ($i = 0; $i <= 10; $i++) {
            echo $this->_nbr1 . " * " . $i . " = " . ($this->_nbr1 * $i)."<br/>";
        }
    }
    
}
