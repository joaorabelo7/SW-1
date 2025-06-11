<?php
    class Student{
        private $Name;
        private $Note1;
        private $Note2;
    
    public function __construct($n,$n1,$n2){
        $this->Name = $n;
        $this->Note1 = $n1;
        $this->Note2 = $n2;
    }

    public function getName(){
        return $this->Name;
    }

    public function getNote1(){
        return $this->Note1;
    }

    public function getNote2(){
        return $this->Note2;
    }

    public function CalcMedia($n1,$n2){
        $media = ($n1+$n2)/2;
        return $media;
    }

    public function VerifySituation($media){
        if($media>= 7){
            return "Aproved";
        }else{
            return "Reproved";
        }
    }
}

?>