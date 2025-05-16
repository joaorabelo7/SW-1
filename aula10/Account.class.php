<?php
    class Account{
        public $Name;
        public $Cpf;
        private $Balance;

        public function Withdraw($value){
            if($value > $this->Balance){
                echo"Insufficient Balance";
            }else{
            $this->Balance -= $value;
            $result = "Your updated balance: ".$this->Balance;
            return $result;
        }
        }
        public function deposit($value){
            $this->Balance += $value;
            $result = "Your updated balance: ".$this->Balance;
            return $result;
        }
        public function ConsultBalance(){
            echo "Name: " . $this->Name . "<br>";
            echo "Cpf: " . $this->Cpf . "<br>";
            echo "Balance: " . $this->Balance . "<br>";
        }
    }



?>