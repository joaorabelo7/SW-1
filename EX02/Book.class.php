<?php
    class Book{
        private $Title;
        private $Author;
        private $Available;
        

        public function __construct($title,$author,$available){
            $this->Title = $title;
            $this->Author = $author;
            $this->Available = $available;
        }

        public function getTitle(){
            return $this->Title;
        }
        public function getAvailable(){
            return $this->Available;
        }

        public function to_loan(){
            if($this->getAvailable() == true){
                $this->Available = false;
            }else{
                echo "<br>The book is unavailable";
            }
        }

        public function return_book(){
            $this->Available = true;
            echo "<br>Thanks! You are wellcome!!!";
        }
        public function showStats(){
            $title_book = $this->getTitle();
            if($this->getAvailable() == true){
                $status_book = "Available";
            }else{
                $status_book = "Borrowed";
            }
            $reply = "The ". $title_book ." book is " . $status_book;
            return $reply;
        }
    }


?>