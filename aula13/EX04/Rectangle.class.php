<?php

    class Rectangle{
        private $Width;
        private $Height;



        public function __construct($width,$height){
        $this->Width = $width;
        $this->Height = $height;
    }


        public function getWidth(){
            return $this->Width;
        }
        public function getHeight(){
            return $this->Height;
        }

        public function calcArea(){
            $result_area = $this->getWidth() * $this->getHeight();
            return "Area: " . $result_area;
        }
        public function calcPerimeter(){
            $result_perimeter = ($this->getWidth() * 2) + ($this->getHeight() * 2);
            return "Perimeter: " . $result_perimeter;
        }
    }




?>