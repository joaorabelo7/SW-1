<?php

class Wharehouse{
    private $Name;
    private $Price;
    private $Qtty;

    public function __construct($name, $initial_price = 0, $initial_qtty = 0){
        $this->Name = $name;
        $this->Price = $initial_price;
        $this->Qtty = $initial_qtty;
    } 

    public function getName(){
        return $this->Name;
    }
    public function getPrice(){
        return $this->Price;
    }

    public function setName($name){
        if (is_string($name)) {
        $this->Name = $name;
        }else{
            echo "Invalid name!";
        }
    }
    public function setPrice($price){
        if (is_float($price) && $price >= 0) {
            $this->Price = $price;
        } else {
            echo "Invalid quantity!";
        }
    }

    public function Add($value){
        if($value > 0){
            $this->Qtty += $value;
        }
    }
    public function Remove($value){
        if($value > 0){
            $this->Qtty -= $value;
        }
    }
    public function Show_details(){
        echo "Product name: {$this->Name} <br>";
        echo "Product Price: {$this->Price} <br>";
        echo "Product Quantity: {$this->Qtty} <br>";
    }
}
?>