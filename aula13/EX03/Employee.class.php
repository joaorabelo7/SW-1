<?php

    class Employee{
        private $Name;
        private $Salary;



        public function __construct($name,$salary){
            $this->Name = $name;
            $this->Salary = $salary;
        }

        public function getName(){
            return $this->Name;
        }
        public function getSalary(){
            return $this->Salary;
        }


        public function up_salary($percentage){
            $this->Salary += ($this->Salary * $percentage) / 100;
        }

        public function show_informations(){
            $name = $this->getName();
            $salary = $this->getSalary();
            $reply = "Hello " . $name . " your updated salary is : " . $salary;
            return $reply;
        }
    }
    





?>